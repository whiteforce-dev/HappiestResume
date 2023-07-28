var typetosrcurl = "div";
var tools = '<div class="edit-contols"><div class="btn-group btn-group-sm" role="group">' +
    '<button type="button" class="btn-changeimg uprow btn blue-gradient" onclick="shiftup(this)" title="Move Up"><i class="mdi mdi-arrow-up-bold"> </i></button>' +
    '<button type="button" class="btn-changeimg downrow btn blue-gradient" onclick="shiftdown(this)" title="Move Down"><i class="mdi mdi-arrow-down-bold"> </i></button>' +
    '<div class="btn-changeimg btnimg blue-gradient" title="Upload Image"><input type="file" onchange="changeimg(this);" /><i class="mdi mdi-camera"> </i> Change image</div>' + //imguploadlb
    '<button type="button" class="btn-changeimg btndup btn peach-gradient" onclick="duplicatebox(this);" title="Create block"><i class="mdi mdi-content-duplicate"> </i></button>' +
    '<button type="button" class="btn-changeimg btn btn-danger" onclick="removerow(this);"><i class="mdi mdi-delete"> </i></button>' +
    '</div> </div>';
var append_timelinetools = '<div class="edit-contols"><div class="btn-group btn-group-sm" role="group">' +
    //'<button type="button" class="btn-changeimg uprow btn btn-warning" onclick="shiftup_timeline(this)" data-toggle="tooltip" title="Move Up"><i class="mdi mdi-arrow-up-bold"> </i></button>' +
    //'<button type="button" class="btn-changeimg downrow btn btn-amber" onclick="shiftdown_timeline(this)" data-toggle="tooltip" title="Move Down"><i class="mdi mdi-arrow-down-bold"> </i></button>' +
    '<button type="button" class="btn-changeimg btndup btn blue-gradient" onclick="duplicate_timeline(this);" data-toggle="tooltip" title="Create block"><i class="mdi mdi-content-duplicate"> </i></button>' +
    '<button type="button" class="btn-changeimg btn btn-danger" onclick="removerow(this);"  data-toggle="tooltip" title="Delete"><i class="mdi mdi-delete"> </i></button>' +
    '</div> </div>';
var append_basictools = '<div class="edit-contols"><div class="btn-group btn-group-sm" role="group">' +
    '<button type="button" contenteditable="false" unselectable="on"  class="btn-changeimg btndup btn blue-gradient" onclick="duplicateblock(this);" data-toggle="tooltip" title="Create block"><i class="mdi mdi-content-duplicate"> </i></button>' +
    '<button type="button" contenteditable="false" unselectable="on"  class="btn-changeimg btn btn-danger" onclick="removeblock(this);" data-toggle="tooltip" title="Delete"><i class="mdi mdi-delete"> </i></button>' +
    '</div> </div>';

// var append_pertools = '<div class="edit-contols"><div class="btn-group btn-group-sm" role="group">' +
//     '<button type="button" contenteditable="false" unselectable="on" class="btn-changeimg btndup btn blue-gradient" onclick="duplicateblock(this);" title="Duplicate block"><i class="mdi mdi-content-duplicate"> </i></button>' +
//     '<button type="button" contenteditable="false" unselectable="on" class="btn-changeimg btn btn-danger" onclick="removeblock(this);" title="Remove block"><i class="mdi mdi-delete"> </i></button>' +
//     '</div> </div>';

var mySpcificSelection;

function removeblock(dis) {
    $('.selectedrow').remove();
    $('.tooltip').remove();
}
var globalpresentchk_id=102;
function duplicateblock(dis) {
    $('.selectedrow').find('.edit-contols').remove();
    var copyblock = $('.selectedrow').last().parent().html();
    globalpresentchk_id++;
    $("#copydiv").html(copyblock);
    $("#copydiv").children().not('.selectedrow').remove();
    var updatecopyblock = $("#copydiv").find('.present_chk').attr('id', globalpresentchk_id);
    updatecopyblock = $("#copydiv").find('.present_for').attr('for', globalpresentchk_id);
    var GetHTML = $("#copydiv").html();
    $("#copydiv").html('');
    $($.trim(GetHTML)).insertAfter(".selectedrow");
    InitilizeTooltip();
    $('.tooltip').remove();
}

function selectedrow(dis) {
    $('.blank_resumebox table tr').removeClass('selectedrow');
    $('.edit-contols').remove();
    var getlength = $(dis).find('.edit-contols').length;
    if (getlength == 0) {
        $(dis).addClass('selectedrow');
        $(dis).find('td:last-child').append(append_basictools);
    }
    $(dis).addClass('selectedrow');
    mySpcificSelection = dis;
    InitilizeTooltip();
}

function personal_rowclick(dis) {
    $('.blank_resumebox table tr').removeClass('selectedrow');
    $('.edit-contols').remove();
    //var getlength = $(dis).find('.edit-contols').length;
    // if (getlength == 0) {
    //     $(dis).addClass('selectedrow');
    //     $(dis).find('.edit_perblock').append(append_basictools);
    // }
    $(dis).addClass('selectedrow');
    mySpcificSelection = dis;
}

function removeblock_per() {
    $('.selectedrow').remove();
    InitilizeTooltip();
    $('.tooltip').remove();
}

function selectedrow_timeline(dis) {
    $('.timeline li').removeClass('selectedrow_timeline');
    $('.blank_resumebox table tr').removeClass('selectedrow');
    $('.edit-contols').remove();
    var getlength = $(dis).find('.edit-contols').length;
    if (getlength == 0) {
        $(dis).addClass('selectedrow_timeline');
        $(dis).append(append_timelinetools);
    }
    $(dis).addClass('selectedrow_timeline');
    mySpcificSelection = dis;
    InitilizeTooltip();
}

function duplicate_timeline(me) {
    let checkcount = $('.timeline li').length;
    if (checkcount < 6) {
        var ABC = $('.selectedrow_timeline').last().parent().html();
        $("#copydiv").html(ABC);
        $("#copydiv").children().not('.selectedrow_timeline').remove();
        var GetHTML = $("#copydiv").html();
        $("#copydiv").html('');
        $($.trim(GetHTML)).insertAfter(".selectedrow_timeline");
        $('#mynewrow').find('.edit-contols').remove();
        InitilizeTooltip();
        $('.tooltip').remove();
    } else {
        $('.tooltip').remove();
        ShowErrorPopupMsg('Do Not Enter More Than Education.');
    }
}

function shiftup_timeline(me) {
    var row = $(me).parents("li:first");
    row.insertBefore(row.prev());
    InitilizeTooltip();
}

function shiftdown_timeline(me) {
    var row = $(me).parents("li:first");
    row.insertAfter(row.next());
    InitilizeTooltip();
}

function shiftup(me) {
    var row = $(me).parents("tr:first");
    row.insertBefore(row.prev());
}

function shiftdown(me) {
    var row = $(me).parents("tr:first");
    row.insertAfter(row.next());
}

function selectrow(me) {
    $('.row_hover').removeClass('selectedrow');
    $('.edit-contols').remove();
    $('.row_hover').removeAttr('id');
    var len = $(me).find('.edit-contols').length;
    if (len == 0) {
        $(me).addClass('selectedrow');
        $(me).find('.tbl_cell').append(tools);
    }

    var noimgLength = Number($(me).find(".noimg").length);
    if (noimgLength > 0) {
        $(me).find(".btnimg").remove();
    }

    var txtonly = Number($(me).find(".txtonly").length);
    if (txtonly > 0) {
        $(me).find(".btnimg").remove();
    }

    var addressonly = Number($(me).find(".address_only").length);
    if (addressonly > 0) {
        $(me).find(".btnimg").remove();
        $(me).find(".uprow").remove();
        $(me).find(".downrow").remove();
        $(me).find(".btndup").remove();
    }

    // FOR TEMPLATE LOGO
    var TemplateLogo = Number($(me).find(".tbl_logo").length);
    if (TemplateLogo > 0) {
        //   $(me).find(".uprow").remove();
        //  $(me).find(".downrow").remove();
        $(me).find(".btndup").remove();
    }

    //ALL CODE FOR SOCIAL ICONS
    //debugger;
    var SocialLinks = Number($(me).find(".sociallinks").length);
    if (SocialLinks > 0) {
        $(me).find(".btnimg").remove();
        $(me).find(".btndup").remove();
        // OPENING SOCIAL LINKS LIGHTBOX
        $("#socialmedia").fadeIn();

        $('.toolbox-type li').css('background-color', 'transparent');
        $('.toolbox-type li').css('color', '#989898');
        $('.toolbox-type li').css('border-left', 'solid 2px #ececec');
        $('#tool_socialmedia').show();
        $('#tool_socialmedia_savebtns').show();

        $("#socialmedia").css('background-color', '#1a7fd0');
        $("#socialmedia").css('color', '#ffffff');
        $("#socialmedia").css('border', 'none');
        $('#tools_block').hide();
        $('#txttools').hide();

        // HIDING SOCIAL TAB AND ADJUST WIDTH
        // $(".toolbox-type li").css("width", "33.3%");
        //  $(".toolbox-type li").last().prev().css("border-right", "solid 2px #1a7fd0");

        // SHOWING ALL SOCIAL URL INPUT BOX
        //  $("#tool_socialmedia .tool-social-box").find(".ed_socialblock:visible").show();
        //  $("#tool_socialmedia .tool-social-box").find(".ed_socialblock:nth-child(4)").nextAll('.ed_socialblock').remove();
    }

    var notmoov = Number($(me).find(".notarrow").length);
    if (notmoov > 0) {
        $(me).find(".uprow").remove();
        $(me).find(".downrow").remove();
    }
    mySpcificSelection = me;
    if (Number($(me).find('.img_bg').length) > 0) {
        typetosrcurl = "div";
    } else {
        typetosrcurl = "img";
    }
    // CODE OF IMAGE RESIZE
    if (Number($(".selectedrow").find(".imgonly").length) > 0) {
        $(".selectedrow").find(".imgonly").resizable();
    }
}

// function duplicatebox(me) {
//     var ABC = $('.selectedrow').last().parent().html();
//     $("#copydiv").html(ABC);
//     $("#copydiv").children().not('.selectedrow').remove();
//     var GetHTML = $("#copydiv").html();
//     $("#copydiv").html('');
//     $($.trim(GetHTML)).insertAfter(".selectedrow");
//     $('#mynewrow').find('.edit-contols').remove();
// }

function removerow(that) {
    // SPECIAL CASE ONLY FOR SOCIAL ROW ADDING
    if ($(that).parent().parent().parent().hasClass("sociallinks")) {
        window.setTimeout(function () {
            // HIDING SOCIAL TAB AND ADJUST WIDTH
            //$("#socialmedia").css("display", "none");
            //$(".toolbox-type li").css("width", "50%");
            //$(".toolbox-type li").last().prev().css("border-right", "solid 0px #1a7fd0");

            // HIDING SOCIAL TAB LINKS AREA AND OPENING ADD BLOCKS AREA
            $('#tools_block').show();
            $('#txttools').hide();
            //$('#tool_socialmedia').hide();
            // $('#tool_socialmedia_savebtns').hide();
            $("#addblocks").css('border', 'none');
            $("#addblocks").css('color', '#ffffff');
            $("#addblocks").css('background-color', '#1a7fd0');
        }, 200);
    }
    $(mySpcificSelection).remove();
    let gat_timelinelength = $('.timeline li').length;
    if (gat_timelinelength < 1) {
        $('.timeline').parent().parent().remove();
    }
    $('.tooltip').remove();
}


function removeselection() {
    $(".row_hover").removeClass('selectedrow');
    $('.edit-contols').remove();
    $('.btnchange_img').remove();
    hidingSocialMediaTAB();
}

// alignment //
function justify(me) {
    $('.txt-tools-ul li').removeClass('active_alignment');
    $(me).addClass('active_alignment');
    $(mySpcificSelection).css("text-align", "justify");

}

function left(me) {
    $('.txt-tools-ul li').removeClass('active_alignment');
    $(me).addClass('active_alignment');
    $(mySpcificSelection).css("text-align", "left");
}

function center(me) {
    $('.txt-tools-ul li').removeClass('active_alignment');
    $(me).addClass('active_alignment');
    $(mySpcificSelection).css("text-align", "center");
}

function right(me) {
    $('.txt-tools-ul li').removeClass('active_alignment');
    $(me).addClass('active_alignment');
    $(mySpcificSelection).css("text-align", "right");
}

function getfont(me) {
    var familyValue = $(me).attr("data-family");
    $('#resume_body').css("font-family", familyValue);
    //$('.resume_body').css("font-family", familyValue);
    //$(mySpcificSelection).css("font-family", familyValue);
    //   document.execCommand('FontName', false, 'Arial');
}

function characherspecing(me) {
    var c = $(me).val();
    $(mySpcificSelection).css('letter-spacing', c + 'px')
    $(me).prev().find('span').text(c + " px");
}

function linespecing(me) {
    var lh = $(me).val();
    document.execCommand('line-height', false, lh + 'px');
    $(mySpcificSelection).css('line-height', lh + 'px')
    $(me).prev().find('span').text(lh + " px");
}

function rangecontrol(me) {
    var v = $(me).val();
    document.execCommand("fontSize", false, '7');
    var fontElements = document.getElementsByTagName("font");
    for (var i = 0, len = fontElements.length; i < len; ++i) {
        if (fontElements[i].size == '7') {
            fontElements[i].removeAttribute("size");
            fontElements[i].style.fontSize = v + "px";
        }
    }
    $('#font_counter').text(v + ' px');
}

function url(i) {
    document.execCommand('Createlink', false, i);
    $('.edittxt').focus();
    return false;
}

function bulletactive() {
    let chkaction = $('.selectedrow').find('.number_bullet_container').first().has('ul');
    let chkaction_ol = $('.selectedrow').find('.number_bullet_container').first().has('ol');
    if (chkaction_ol.length == 1) {
        let editable_block = $('.selectedrow').find('.number_bullet_container').first();
        $($(editable_block).find('ol').get().reverse()).each(function () {
            $(this).replaceWith($('<ul>' + $(this).html() + '</ul>'));
        });
        return false;
    } else if (chkaction.length == 0) {
        let ul = $("<ul>");
        let li = null
        let p = null;
        let table = $('.selectedrow');
        let ths = table.eq(0).find("p");
        ths.each(function () {
            li = $("<li>");
            p = $("<p>");
            p.html(ths.eq($(this).index()).html());
            //li.append(content);
            li.append(p);
            ul.append(li);
        });
        table.find('.number_bullet_container').first().html('');
        table.find('.number_bullet_container').first().html(ul);
        return false;
    } else {
        let editable_block = $('.selectedrow').find('.number_bullet_container').first();
        $(editable_block).find("ul li").contents().unwrap();
        $(editable_block).find("ul").contents().unwrap();
    }
}

function numberactive() {
    let chkaction_ol = $('.selectedrow').find('.number_bullet_container').first().has('ol');
    let chkaction_ul = $('.selectedrow').find('.number_bullet_container').first().has('ul');
    if (chkaction_ul.length == 1) {
        let editable_block = $('.selectedrow').find('.number_bullet_container').first();
        $($(editable_block).find('ul').get().reverse()).each(function () {
            $(this).replaceWith($('<ol>' + $(this).html() + '</ol>'));
        });
        return false;
    } else if (chkaction_ol.length == 0) {
        let ol = $("<ol>");
        let li = null
        let p = null;
        let table = $('.selectedrow');
        let ths = table.eq(0).find("p");
        ths.each(function () {
            li = $("<li>");
            p = $("<p>");
            p.html(ths.eq($(this).index()).html());
            li.append(p);
            ol.append(li);
        });
        table.find('.number_bullet_container').first().html('');
        table.find('.number_bullet_container').first().html(ol);
        return false;
    } else {
        let editable_block = $('.selectedrow').find('.number_bullet_container').first();
        $(editable_block).find("ol li").contents().unwrap();
        $(editable_block).find("ol").contents().unwrap();
    }
}

$(function () {
    $(mySpcificSelection).focus();
    $('#alink').click(function () {
        var urlp = prompt("Enter Your Link:", "http://");
        url(urlp);
    });

    $('#bold').click(function () {
        document.execCommand('bold', false, null);
        $('.my').focus();
        return false;
        // $(mySpcificSelection).css('font-weight','bold');
    });
    $('#italic').click(function () {
        document.execCommand('italic', false, null);
        $('.my').focus();
        return false;
    });
    $('#underline').click(function () {
        document.execCommand('underline', false, null);
        $('.my').focus();
        return false;
    });
});

function sociallink(me) {
    var html_content = '<tr onclick="selectrow(this)" class="row_hover"> <td align="center" style="position: relative" class="tbl_cell sociallinks">'
        + '<ul class="ul-social-media" id="icon_social">'
        + '<li data-whichone="facebook" style="display:inline-block;list-style:none;"><a href="javascript:void();"><img src="https://happiestresume.com/images/facebook.png" style="width:35px;" /></a> </li>'
        + '<li data-whichone="twitter" style="display:inline-block;list-style:none;"><a href="javascript:void();"><img src="https://happiestresume.com/images/twitter.png" style="width:35px;" width="35px" /> </a> </li>'
        + '<li data-whichone="linkedin" style="display:inline-block;list-style:none;"><a href="javascript:void();"><img src="https://happiestresume.com/images/linkedin.png" style="width:35px;" width="35px"/> </a> </li>'
        + '<li data-whichone="googleplus" style="display:inline-block;list-style:none;"><a href="javascript:void();"><img src="https://happiestresume.com/images/googleplus.png" style="width:35px;" width="35px"/> </a> </li>'
        + '</ul>'
        + '</td>'
        + '</tr>';

    // PREVENTING MULTIPLE TIME ADDING SOCIAL ROW
    if (Number($(".sociallinks").length) > 0) {
        return false;
    }
    if (Number($(".selectedrow").length) > 0) {
        $(html_content).insertAfter(".selectedrow");
    } else {
        $(html_content).insertBefore($(".mainrows:visible tr").last());
    }
}

function hidingSocialMediaTAB() {
    // HIDING SOCIAL TAB AND ADJUST WIDTH
    //$("#socialmedia").css("display", "none");
    //$(".toolbox-type li").css("width", "50%");
    //$(".toolbox-type li").last().prev().css("border-right", "solid 0px #1a7fd0");
    // HIDING SOCIAL TAB LINKS AREA AND OPENING ADD BLOCKS AREA
    //$('#tool_socialmedia').hide();
    $('#tool_socialmedia_savebtns').hide();
    if (!$(".txt-tools-container").is(':visible')) {
        $('#tools_block').show();
        $('#txttools').hide();
        $("#addblocks").css('border', 'none');
        $("#addblocks").css('color', '#ffffff');
        $("#addblocks").css('background-color', '#1a7fd0');

    }
}

function RemoveLink(that, defaultvalue) {
    $("#icon_social").find('li[data-whichone="' + $.trim($(that).attr("data-whichremove")) + '"]').remove();
    if (Number($(that).parent().parent().parent().find(".ed_socialblock:visible").length) == 1) {
        // hidingSocialMediaTAB();
        $(".selectedrow").remove();
        if (defaultvalue == "default") {
            $(that).parent().parent().hide();
        } else {
            $(that).parent().parent().remove();
        }
        $("#tool_socialmedia .tool-social-box").find(".ed_socialblock").show();
    } else {
        if (defaultvalue == "default") {
            $(that).parent().parent().hide();
        } else {
            $(that).parent().parent().remove();
        }
    }
}

function SaveSocialurl() {
    $(".tool-social-box").find('input[type="text"]').each(function () {
        var value = $.trim($(this).next().attr("data-whichremove"));
        var InputText = $.trim($(this).val());
        $("#icon_social").find('li[data-whichone]').each(function () {
            if ($.trim($(this).attr("data-whichone")) == value) {
                if (InputText != "") {
                    if (InputText && !InputText.match(/^http([s]?):\/\/.*/)) {
                        InputText = 'http://' + InputText;
                    }
                    //$(this).find("a").attr("data-urllink", InputText);
                    $(this).find("a").attr("href", InputText);
                    $(this).find("a").attr("target", "_blank");
                }
            }
        });
    });
    // $('.toolbox-type li').css('background-color', 'transparent');
    // $('.toolbox-type li').css('color', '#989898');
    // $('.toolbox-type li').css('border-left', 'solid 2px #ececec');
    // $('#txtstyle').css('background-color', '#1a7fd0');
    // $('#txtstyle').css('color', '#ffffff');
    // $('#txtstyle').css('border', 'none');
    //$('.txt-tools-container').hide();
    //$('#txttools').show();
    //$('#tool_socialmedia_savebtns').hide();
    //$('#editor_buttonbox').show();
    PreviewResume();
}

function social_selection(that) {
    var parentROW = $(that).parent().parent();
    var SelectedOption = $(that).val();
    var PreviousSelected = $(that).attr("data-whatisthis");
    $("#icon_social").find('li[data-whichone="' + $.trim(PreviousSelected) + '"]').remove();
    if (Number($("#icon_social").find('li[data-whichone="' + $.trim(SelectedOption) + '"]').length) == 0) {
        //ADDING ICONS IN TEMPLATE
        $("#icon_social").append('<li data-whichone="' + SelectedOption + '" style="display:inline-block;list-style:none;"><a href="javascript:void();"><img src="https://happiestresume.com/images/' + SelectedOption + '.png" style="width:35px"/> </a> </li>');
        $(that).attr("data-whatisthis", SelectedOption);
        parentROW.find("img").attr("src", "https://happiestresume.com/images" + SelectedOption + ".png");
        parentROW.find('[data-whichremove]').attr("data-whichremove", SelectedOption);
    }
}

function OpenSocialtab() {
    $('.toolbox-type li').css('background-color', 'transparent');
    $('.toolbox-type li').css('color', '#989898');
    $('.toolbox-type li').css('border-left', 'solid 2px #ececec');
    $('#tool_socialmedia').show();
    $('#tool_socialmedia_savebtns').show();
    $('#socialmedia').css('background-color', '#1a7fd0');
    $('#socialmedia').css('color', '#ffffff');
    $('#socialmedia').css('border', 'none');
    $('#tools_block').hide();
    $('#txttools').hide();
    $('#editor_buttonbox').hide();
}

function InitilizeTooltip() {
    $('[data-toggle="tooltip"]').tooltip();
    $('.edit-contols').mouseleave(function () {
        $('.tooltip').remove();
    });
}

$(document).ready(function () {
    // const pickr7 = new Pickr({
    //     el: '#resume_bgcolor',
    //     useAsButton: true,
    //     components: {
    //         preview: true,
    //         opacity: true,
    //         hue: true,
    //         interaction: {
    //             hex: true,
    //             rgba: true,
    //             hsla: true,
    //             hsva: true,
    //             cmyk: true,
    //             input: true,
    //             clear: true,
    //             save: true
    //         }
    //     },
    //     onChange(hsva) {
    //         $('#resume_body').css('background-color', hsva.toHEX().toString());
    //     }
    // });
    // const pickr3 = new Pickr({
    //     el: '#perticular_content_bgcolor',
    //     useAsButton: true,
    //     default: "f5f5f5",
    //     components: {
    //         preview: true,
    //         opacity: true,
    //         hue: true,
    //         interaction: {
    //             hex: true,
    //             rgba: true,
    //             hsla: true,
    //             hsva: true,
    //             cmyk: true,
    //             input: true,
    //             clear: true,
    //             save: true
    //         }
    //     },
    //     onChange(hsva, instance) {
    //         $('.selectedrow td div').first().css('background-color', hsva.toRGBA().toString());
    //     }
    // });
    $('.family_btnclick').click(function (e) {
        var curr_class = $('#font-family-popup').attr('class');
        if (curr_class == 'font-family-box card style-scroll list-unstyled') {
            $('#font-family-popup').addClass('scale0');
        } else {
            $('#font-family-popup').removeClass('scale0');
        }
        e.stopPropagation();
    });
    var mySpcificSelection1 = $('.email_body');
    var mySpcificSelection2 = $('.email_innerbody');

    $('#addmore_social').click(function () {

        var nextSelectedValue = $(".ed_socialblock").last().find(".selectoption option:selected").next().val();

        var previous = [];
        $(".ed_socialblock:visible").find(".selectoption option:selected").each(function () {
            previous.push($(this).val());
        });

        $(".selectoption").attr("disabled", "disabled");

        // BECAUSE ONLY 10 OPTIONS ARE THERE
        if (previous.length == 10) {
            return false;
        }

        nextSelectedValue = nextSelectedValue !== undefined ? nextSelectedValue : "";

        var html_content = "<div class='ed_socialblock'>"
            + "<div class='col-xs-12 form-group'>"
            // + "<div class='row'>"
            + "<select class='form-control selectoption' onchange='social_selection(this);'>"
            + "<option value='facebook' " + (nextSelectedValue == "facebook" ? "selected='selected'" : "") + ">Facebook </option>"
            + "<option value='twitter' " + (nextSelectedValue == "twitter" ? "selected='selected'" : "") + ">Twitter</option>"
            + "<option value='linkedin' " + (nextSelectedValue == "linkedin" ? "selected='selected'" : "") + ">Linkedin</option>"
            + "<option value='googleplus' " + (nextSelectedValue == "googleplus" ? "selected='selected'" : "") + ">Google plus</option>"
            + "<option value='pinterest' " + (nextSelectedValue == "pinterest" ? "selected='selected'" : "") + ">Pinterest</option>"
            + "<option value='instagram' " + (nextSelectedValue == "instagram" ? "selected='selected'" : "") + ">Instagram</option>"
            + "<option value='youtube' " + (nextSelectedValue == "youtube" ? "selected='selected'" : "") + ">YouTube</option>"
            + "<option value='tumblr' " + (nextSelectedValue == "tumblr" ? "selected='selected'" : "") + ">Tumblr</option>"
            + "<option value='reddit' " + (nextSelectedValue == "reddit" ? "selected='selected'" : "") + ">Reddit</option>"
            + "<option value='website' " + (nextSelectedValue == "website" ? "selected='selected'" : "") + ">Website</option>"
            + "</select>"
            + "</div>"
            + "<div class='social-tool-row'><div class='social-tool-icon'><img src='https://happiestresume.com/images/" + nextSelectedValue + ".png' width='35px'></div>"
            + "<input type='text' class='form-control' placeholder='Enter page URL here'>"
            + "<span data-whichremove='" + nextSelectedValue + "' onclick='RemoveLink(this);'><i class='mdi mdi-delete' aria-hidden='true'></i></span></div></div>";

        $("#tool_socialmedia .tool-social-box").append(html_content);

        //REMOVING OPTIONS PREVIOUSLY SELECTED REMOVING FROM DROPDOWN
        for (var i in previous) {
            $(".selectoption option[value='" + previous[i] + "']").last().remove();
        }

        if (nextSelectedValue == "") {
            nextSelectedValue = $(".selectoption option:selected").last().val();
            $(".ed_socialblock").last().find("img").attr("src", "https://happiestresume.com/images/" + nextSelectedValue + ".png");
            $(".ed_socialblock").last().find('[data-whichremove]').attr("data-whichremove", nextSelectedValue);
        }

        //ADDING ICONS IN TEMPLATE
        $("#icon_social").append('<li data-whichone="' + nextSelectedValue + '" style="display:inline-block;list-style:none;"><a href="javascript:void();"><img src="https://happiestresume.com/images/' + nextSelectedValue + '.png" width="35px"/> </a> </li>');
        $(".ed_socialblock:visible").find(".selectoption").last().attr("data-whatisthis", nextSelectedValue);
    });
    $('.toolbox-type li').click(function () {
        $('.toolbox-type li').css('background-color', 'transparent');
        $('.toolbox-type li').css('color', '#989898');
        $('.toolbox-type li').css('border-left', 'solid 2px #ececec');
        var getid = $(this).attr('id');
        if (getid == "txtstyle") {
            $('#txttools').show();
            $(this).css('background-color', '#1a7fd0');
            $(this).css('color', '#ffffff');
            $(this).css('border', 'none');
            $('#tools_block').hide();
            $('#tool_socialmedia').hide();
            $('#tool_socialmedia_savebtns').hide();
            $('#editor_buttonbox').show();
        } else if (getid == "socialmedia") {
            $('#tool_socialmedia').show();
            $('#tool_socialmedia_savebtns').show();
            $(this).css('background-color', '#1a7fd0');
            $(this).css('color', '#ffffff');
            $(this).css('border', 'none');
            $('#tools_block').hide();
            $('#txttools').hide();
            $('#editor_buttonbox').hide();
        } else {
            $('#tools_block').show();
            $('#txttools').hide();
            $('#tool_socialmedia').hide();
            $('#tool_socialmedia_savebtns').hide();
            $(this).css('background-color', '#1a7fd0');
            $(this).css('color', '#ffffff');
            $(this).css('border', 'none');
            $('#editor_buttonbox').show();
        }
    });
    //    $('.tools-title li').click(function () {
    //        $(this).parent().hide();

    //        var getid = $(this).attr("id");
    //        if (getid == "h1") {
    //            $(mySpcificSelection).css("font-size", "70px");
    //        }
    //        else if (getid == "h2") {
    //            $(mySpcificSelection).css("font-size", "50px");
    //        }
    //        else if (getid == "h3") {
    //            $(mySpcificSelection).css("font-size", "36px");
    //        }
    //        else if (getid == "h4") {
    //            $(mySpcificSelection).css("font-size", "30px");
    //        }
    //        else if (getid == "h5") {
    //            $(mySpcificSelection).css("font-size", "22px");
    //        }
    //        else if (getid == "h6") {
    //            $(mySpcificSelection).css("font-size", "18px");
    //        }
    //    });

});
