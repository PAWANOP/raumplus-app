var _scene = 0;

$(document).on('click', '.tab-box-inspiration-inner a', function (e) {
    $('.tab-box-inspiration-inner a').removeClass("active");
    $(this).addClass("active");
    let dataScene = $(this).attr("data-scene");
    $(".control-scene").removeClass("current");
    $(".control-scene[data-scene=" + dataScene + "]").addClass("current");
    $("#material-scene> div").removeClass("current");
    $("#material-scene> div[data-scene=" + dataScene + "]").addClass("current");
     _scene = jQuery("#material-scene > div.current").attr("data-scene");
    return false;
});
jQuery(document).ready(function() {
    _scene = jQuery("#material-scene > div.current").attr("data-scene");
    jQuery(document).on("mouseenter", ".control-material > a", function() {
        var a = ("ontouchstart"in window || "onmsgesturechange"in window);
        var b = tx_material_images[_scene][$(this).attr("data-position")][$(this).attr("data-index")].preview;
        if (b && !a && jQuery(document).width() >= 769) {
            $("#material-preview-inner").children("img").attr("src", b);
            $("#material-preview-title").text(tx_material_images[_scene][$(this).attr("data-position")][$(this).attr("data-index")].title);
            $("#material-preview").stop(true, false).fadeIn(250)
        }
    });
    jQuery(document).on("mouseleave", ".control-material > a", function() {
        $("#material-preview").stop(true, false).fadeOut(250)
    });
    jQuery(document).on("click", ".control-material > a", function(a) {
        txMaterialChangeOverlay(a, $(this).attr("data-position"), $(this).attr("data-index"));
        return false
    });
    // jQuery(document).on("click", "#material-header > div > ul > li > a", function(b) {
    //     var a = $(this).parent().attr("data-scene");
    //     txMaterialChangeScene(b, a);
    //     return false
    // });
    jQuery(document).on("click", "#txMaterialFormSubmit", function(a) {
        a.preventDefault();
        jQuery("#txMaterialForm").submit();
        return false
    })
});
function txMaterialChangeScene(b, c, a) {
    b.stopPropagation();
    b.preventDefault();
    if (_scene !== c) {
        jQuery("#material-scene > div").removeClass("current");
        jQuery('#material-scene > div[data-scene="' + c + '"]').addClass("current");
        jQuery("#material-controls > div").removeClass("current");
        jQuery('#material-controls > div[data-scene="' + c + '"]').addClass("current");
        // if (jQuery('#material-header > div > ul > li[data-scene="' + c + '"]').length > 0) {
        //     jQuery("#material-header > div > ul > li").removeClass("current");
        //     jQuery('#material-header > div > ul > li[data-scene="' + c + '"]').addClass("current")
        // }
        if (typeof jQuery(b.target).attr("data-default") !== "undefined") {
            if (jQuery(b.target).attr("data-default") == 0) {
                jQuery(b.target).attr("checked", "")
            } else {
                jQuery(b.target).attr("checked", "checked")
            }
        }
        // if (typeof a !== "undefined") {
        //     jQuery('#material-header > div > ul > li[data-scene="' + a + '"]').attr("data-scene", c)
        // }
    }
    if (jQuery(document).width() < 769) {
        if (_scene !== c) {
            jQuery("#material-controls").show()
        } else {
            if (jQuery("#material-controls").is(":visible")) {
                jQuery("#material-controls").hide()
            } else {
                jQuery("#material-controls").show()
            }
        }
    }
    _scene = c;
    return false
}
function txMaterialSceneExport() {
    var b = {
        scene: tx_material_texts[_scene].title || _scene,
        background: tx_material_texts.background,
        materials: []
    };
    var a = jQuery('#material-scene > div[data-scene="' + _scene + '"] > div.material-image.current');
    a.each(function() {
        b.materials.push({
            position: tx_material_texts[_scene].positions[$(this).attr("data-pos")].title,
            title: tx_material_texts[_scene].positions[$(this).attr("data-pos")].materials[$(this).attr("data-index")].title,
            image: tx_material_texts[_scene].positions[$(this).attr("data-pos")].materials[$(this).attr("data-index")].image
        })
    });
    $("#txMaterialFormInfo").val(JSON.stringify(b));
    return true
}
function txMaterialChangeOverlay(b, i, h) {
    b.stopPropagation();
    b.preventDefault();
    var d = jQuery('#material-scene > div[data-scene="' + _scene + '"] > div[data-pos="' + i + '"][data-index="' + h + '"]');
    if (d.length == 0) {
        var g = tx_material_images[_scene][i][h];
        var d = jQuery("<div></div>").attr("data-pos", i).attr("data-index", h).addClass("material-image").insertAfter(jQuery('#material-scene > div[data-scene="' + _scene + '"] > div[data-pos="' + i + '"]').last());
        var f = jQuery("<picture></picture>").appendTo(d);
        for (var j in g.sources) {
            if (j == "default") {
                var e = Object.keys(g.sources[j]);
                jQuery('<img src="' + g.sources[j][e[0]] + '" alt="' + g.alt + '" title="' + g.title + '" />').appendTo(f);
                for (var c in g.sources[j]) {
                    if (c !== e[0]) {
                        var a = g.sources[j][c];
                        jQuery('<source srcset="' + a + '" type="' + c + '" />').appendTo(f)
                    }
                }
            } else {
                for (var c in g.sources[j]) {
                    var a = g.sources[j][c];
                    jQuery('<source srcset="' + a + '" type="' + c + '" media="(min-width: ' + j + 'px)" />').appendTo(f)
                }
            }
        }
    }
    d.find("source[data-srcset]").each(function() {
        jQuery(this).attr("srcset", $(this).attr("data-srcset"));
        jQuery(this).removeAttr("data-srcset")
    });
    d.find("img[data-src]").each(function() {
        jQuery(this).attr("src", $(this).attr("data-src"));
        jQuery(this).removeAttr("data-src")
    });
    d.addClass("toggle").fadeIn(500, function() {
        jQuery('#material-scene > div[data-scene="' + _scene + '"] > div.current[data-pos="' + i + '"]').removeClass("current").hide();
        jQuery(this).removeClass("toggle").addClass("current").show()
    });
    if (jQuery(document).width() < 769) {
        jQuery("#material-controls").hide();
        jQuery("#material-controls").find("li").removeClass("current")
    }
    return false
}
function txMaterialToggleSubmenu(g, f) {
    g.stopPropagation();
    g.preventDefault();
    var e = jQuery(f).parent().hasClass("current");
    jQuery(f).parent().parent().find("li").removeClass("current");
    if (!e) {
        jQuery(f).parent().addClass("current");
        if (jQuery(f).parent().parent().hasClass("control-group")) {
            if (jQuery(f).parent().children("ul").children("li").length == 0) {
                var a = jQuery(f).attr("data-scene");
                var b = jQuery(f).attr("data-position");
                var c = jQuery(f).attr("data-group");
                for (var d in tx_material_images[a][b]) {
                    if (d.split("_")[0] == c) {
                        var h = tx_material_images[a][b][d];
                        jQuery(f).parent().children("ul").append('<li class="control-material"><a href="#" data-position="' + b + '" data-index="' + d + '"><img loading="lazy" src="' + h.thumb + '" width="50" height="50" alt="' + h.alt + '" longdesc="" title="' + h.title + '" /></a></li>')
                    }
                }
            }
        }
    }
    return false
}
;