/**
 * Universal AJAX Form Handler
 * Handles all form submissions via AJAX
 */

(function($) {
    'use strict';

    // Get AJAX URL from WordPress
    var ajaxurl = typeof ajaxurl !== 'undefined' ? ajaxurl : '/wp-admin/admin-ajax.php';

    /**
     * Show loading state
     */
    function showLoading($form) {
        var $submitBtn = $form.find('button[type="submit"], input[type="submit"], .btn_1, a.btn_1');
        $submitBtn.prop('disabled', true);
        $form.data('original-text', $submitBtn.html());
        $submitBtn.html('<span class="text-span">Sending...</span>');
        $form.addClass('ajax-loading');
    }

    /**
     * Hide loading state
     */
    function hideLoading($form) {
        var $submitBtn = $form.find('button[type="submit"], input[type="submit"], .btn_1, a.btn_1');
        $submitBtn.prop('disabled', false);
        var originalText = $form.data('original-text');
        if (originalText) {
            $submitBtn.html(originalText);
        }
        $form.removeClass('ajax-loading');
    }

    /**
     * Show success message
     */
    function showSuccess($form, message) {
        // Remove ALL existing messages first (from form and parent containers)
        $form.find('.ajax-form-message').remove();
        $form.closest('.form-section-bottom-side-inner, .contact-info-inner-bottom, .action-view-box-body, .contact-info-inner-bottom-right').find('.ajax-form-message').remove();
        $('.ajax-form-message').remove(); // Remove any orphaned messages
        
        var successMsg = message || 'Thank you! Your message has been sent successfully.';
        var $messageDiv = $('<div class="ajax-form-message ajax-form-success">' + successMsg + '</div>');
        $form.prepend($messageDiv);
        
        // Scroll to message
        if ($messageDiv.offset()) {
            $('html, body').animate({
                scrollTop: $messageDiv.offset().top - 100
            }, 500);
        }

        // Remove message after 5 seconds
        setTimeout(function() {
            $messageDiv.fadeOut(function() {
                $(this).remove();
            });
        }, 5000);

        // Reset form
        if ($form[0]) {
            $form[0].reset();
        }
        
        // Close modal if exists
        var $modal = $form.closest('.action-view-model-popup, .downlods-view-model-popup');
        if ($modal.length) {
            setTimeout(function() {
                $modal.removeClass('showModel');
            }, 2000);
        }
    }

    /**
     * Show error message
     */
    function showError($form, message) {
        // Remove ALL existing messages first (from form and parent containers)
        $form.find('.ajax-form-message').remove();
        $form.closest('.form-section-bottom-side-inner, .contact-info-inner-bottom, .action-view-box-body, .contact-info-inner-bottom-right').find('.ajax-form-message').remove();
        $('.ajax-form-message').remove(); // Remove any orphaned messages
        
        var errorMsg = message || 'Sorry, there was an error sending your message. Please try again.';
        var $messageDiv = $('<div class="ajax-form-message ajax-form-error">' + errorMsg + '</div>');
        $form.prepend($messageDiv);
        
        // Scroll to message
        if ($messageDiv.offset()) {
            $('html, body').animate({
                scrollTop: $messageDiv.offset().top - 100
            }, 500);
        }

        // Remove message after 5 seconds
        setTimeout(function() {
            $messageDiv.fadeOut(function() {
                $(this).remove();
            });
        }, 5000);
    }

    /**
     * Validate form fields
     */
    function validateForm($form) {
        var isValid = true;
        var $requiredFields = $form.find('input[required], textarea[required], select[required]');
        
        // Also check fields with * in label
        $form.find('label').each(function() {
            if ($(this).text().indexOf('*') !== -1) {
                var $field = $form.find('input, textarea, select').eq($form.find('label').index($(this)));
                if ($field.length && !$field.val().trim()) {
                    $field.addClass('error');
                    isValid = false;
                }
            }
        });

        $requiredFields.each(function() {
            var $field = $(this);
            if (!$field.val().trim()) {
                $field.addClass('error');
                isValid = false;
            } else {
                $field.removeClass('error');
            }

            // Email validation
            if ($field.attr('type') === 'email' && $field.val()) {
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test($field.val())) {
                    $field.addClass('error');
                    isValid = false;
                }
            }
        });

        return isValid;
    }

    /**
     * Collect form data
     */
    function collectFormData($form) {
        var formData = new FormData();
        var formFields = {};

        // Get all input fields
        $form.find('input, textarea, select').each(function() {
            var $field = $(this);
            var name = $field.attr('name') || $field.attr('id') || '';
            var type = $field.attr('type');
            var value = $field.val();

            // Skip submit buttons and hidden fields that shouldn't be sent
            if (type === 'submit' || type === 'button' || type === 'hidden' && name === '_wp_http_referer') {
                return;
            }

            // Generate name from label if no name/id
            if (!name) {
                var $label = $form.find('label').eq($form.find('input, textarea, select').index($field));
                if ($label.length) {
                    name = $label.text().replace('*', '').trim().toLowerCase().replace(/\s+/g, '_');
                } else {
                    name = 'field_' + $form.find('input, textarea, select').index($field);
                }
            }

            // Handle checkboxes and radio buttons
            if (type === 'checkbox' || type === 'radio') {
                if ($field.is(':checked')) {
                    formFields[name] = value || 'yes';
                }
            } else {
                formFields[name] = value;
            }
        });

        // Add form identifier
        formFields.form_type = $form.attr('id') || $form.attr('class') || 'contact_form';
        formFields.form_action = $form.attr('action') || window.location.href;

        return formFields;
    }

    /**
     * Handle form submission
     */
    function handleFormSubmit(e) {
        e.preventDefault();
        e.stopPropagation();

        var $form = $(this);
        
        // Prevent multiple submissions
        if ($form.data('submitting')) {
            return false;
        }
        
        // Mark form as submitting
        $form.data('submitting', true);
        
        // Remove any existing messages
        $form.find('.ajax-form-message').remove();
        $form.closest('.form-section-bottom-side-inner, .contact-info-inner-bottom, .action-view-box-body, .contact-info-inner-bottom-right').find('.ajax-form-message').remove();
        $('.ajax-form-message').remove(); // Remove any orphaned messages
        $form.find('.error').removeClass('error');

        // Validate form
        if (!validateForm($form)) {
            $form.data('submitting', false); // Reset flag on validation error
            showError($form, 'Please fill in all required fields correctly.');
            return false;
        }

        // Show loading state
        showLoading($form);

        // Collect form data
        var formData = collectFormData($form);
        formData.action = 'submit_contact_form';
        var nonceValue = typeof ajaxFormNonce !== 'undefined' ? ajaxFormNonce : '';
        formData.nonce = nonceValue;
        formData._ajax_nonce = nonceValue; // WordPress expects this too

        // Submit via AJAX
        $.ajax({
            url: ajaxurl,
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function(response) {
                hideLoading($form);
                $form.data('submitting', false); // Reset submission flag
                
                if (response.success) {
                    showSuccess($form, response.data.message || 'Thank you! Your message has been sent successfully.');
                } else {
                    showError($form, response.data.message || 'Sorry, there was an error sending your message. Please try again.');
                }
            },
            error: function(xhr, status, error) {
                hideLoading($form);
                $form.data('submitting', false); // Reset submission flag
                showError($form, 'Sorry, there was an error sending your message. Please try again.');
                console.error('AJAX Error:', error);
            }
        });

        return false;
    }

    /**
     * Initialize form handlers
     */
    function initFormHandlers() {
        // Handle forms with form tags
        $('form').each(function() {
            var $form = $(this);
            
            // Skip if already initialized or if it's a special form (like search)
            if ($form.data('ajax-initialized') || $form.hasClass('no-ajax') || $form.attr('action') && $form.attr('action').indexOf('search') !== -1) {
                return;
            }

            $form.on('submit', handleFormSubmit);
            $form.data('ajax-initialized', true);
        });

        // Handle form sections without form tags (like contact-info-inner-bottom-right-form)
        $('.contact-info-inner-bottom-right-form, .form-section-bottom-right').each(function() {
            var $formSection = $(this);
            
            // Skip if already wrapped
            if ($formSection.closest('form').length) {
                return;
            }

            // Wrap in form tag if not already
            if (!$formSection.closest('form').length) {
                $formSection.wrap('<form class="ajax-contact-form"></form>');
            }

            var $form = $formSection.closest('form');
            
            if (!$form.data('ajax-initialized')) {
                // Add submit handler to button
                $formSection.closest('.form-section-bottom-side-inner, .contact-info-inner-bottom').find('.btn_1, .contact-info-btn a').on('click', function(e) {
                    e.preventDefault();
                    $form.trigger('submit');
                });

                $form.on('submit', handleFormSubmit);
                $form.data('ajax-initialized', true);
            }
        });

        // Handle button clicks that should submit forms
        $(document).on('click', '.btn_1, .contact-info-btn a', function(e) {
            var $btn = $(this);
            var $form = $btn.closest('form');
            
            // If button is inside a form, let the form handler take care of it
            if ($form.length) {
                return;
            }
            
            // Prevent multiple clicks
            if ($btn.data('clicked')) {
                e.preventDefault();
                return false;
            }
            $btn.data('clicked', true);
            setTimeout(function() {
                $btn.data('clicked', false);
            }, 3000);

            // Find nearest form section
            var $formSection = $btn.closest('.form-section-bottom-side-inner, .contact-info-inner-bottom, .action-view-box-body').find('.contact-info-inner-bottom-right-form, form');
            
            if ($formSection.length) {
                e.preventDefault();
                
                var $formToSubmit = $formSection.is('form') ? $formSection : $formSection.closest('form');
                
                if (!$formToSubmit.length) {
                    // Wrap in form if needed
                    $formSection.wrap('<form class="ajax-contact-form"></form>');
                    $formToSubmit = $formSection.closest('form');
                }

                if (!$formToSubmit.data('ajax-initialized')) {
                    $formToSubmit.on('submit', handleFormSubmit);
                    $formToSubmit.data('ajax-initialized', true);
                }
                
                // Check if form is already submitting
                if (!$formToSubmit.data('submitting')) {
                    $formToSubmit.trigger('submit');
                }
            }
        });
    }

    // Initialize on document ready
    $(document).ready(function() {
        initFormHandlers();
    });

    // Re-initialize for dynamically added forms
    $(document).on('DOMNodeInserted', function(e) {
        if ($(e.target).is('form') || $(e.target).find('form').length) {
            setTimeout(initFormHandlers, 100);
        }
    });

    // Also use MutationObserver for better compatibility
    if (typeof MutationObserver !== 'undefined') {
        var observer = new MutationObserver(function(mutations) {
            var shouldReinit = false;
            mutations.forEach(function(mutation) {
                if (mutation.addedNodes.length) {
                    for (var i = 0; i < mutation.addedNodes.length; i++) {
                        var node = mutation.addedNodes[i];
                        if (node.nodeType === 1 && (node.tagName === 'FORM' || node.querySelector && node.querySelector('form'))) {
                            shouldReinit = true;
                            break;
                        }
                    }
                }
            });
            if (shouldReinit) {
                setTimeout(initFormHandlers, 100);
            }
        });

        observer.observe(document.body, {
            childList: true,
            subtree: true
        });
    }

})(jQuery);

