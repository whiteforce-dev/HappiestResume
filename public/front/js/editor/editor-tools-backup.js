var typetosrcurl = "div";
var tools = '<div class="edit-contols"><div class="btn-group btn-group-sm" role="group">' +
    '<button type="button" class="btn-changeimg uprow btn blue-gradient" onclick="shiftup(this)" title="Move Up"><i class="mdi mdi-arrow-up-bold"> </i></button>' +
    '<button type="button" class="btn-changeimg downrow btn blue-gradient" onclick="shiftdown(this)" title="Move Down"><i class="mdi mdi-arrow-down-bold"> </i></button>' +
    '<div class="btn-changeimg btnimg blue-gradient" title="Upload Image"><input type="file" onchange="changeimg(this);" /><i class="mdi mdi-camera"> </i> Change image</div>' + //imguploadlb
    '<button type="button" class="btn-changeimg btndup btn peach-gradient" onclick="duplicatebox(this);" title="Duplicate block"><i class="mdi mdi-content-duplicate"> </i></button>' +
    '<button type="button" class="btn-changeimg btn btn-danger" onclick="removerow(this);"><i class="mdi mdi-delete"> </i></button>' +
    '</div> </div>';
var append_timelinetools = '<div class="edit-contols"><div class="btn-group btn-group-sm" role="group">' +
    '<button type="button" class="btn-changeimg uprow btn btn-warning" onclick="shiftup_timeline(this)" title="Move Up"><i class="mdi mdi-arrow-up-bold"> </i></button>' +
    '<button type="button" class="btn-changeimg downrow btn btn-amber" onclick="shiftdown_timeline(this)" title="Move Down"><i class="mdi mdi-arrow-down-bold"> </i></button>' +
    '<button type="button" class="btn-changeimg btndup btn blue-gradient" onclick="duplicate_timeline(this);" title="Duplicate block"><i class="mdi mdi-content-duplicate"> </i></button>' +
    '<button type="button" class="btn-changeimg btn btn-danger" onclick="removerow(this);"><i class="mdi mdi-delete"> </i></button>' +
    '</div> </div>';
var append_basictools = '<div class="edit-contols"><div class="btn-group btn-group-sm" role="group">' +
    '<button type="button" contenteditable="false" unselectable="on"  class="btn-changeimg btndup btn blue-gradient" onclick="duplicateblock(this);" title="Duplicate block"><i class="mdi mdi-content-duplicate"> </i></button>' +
    '<button type="button" contenteditable="false" unselectable="on"  class="btn-changeimg btn btn-danger" onclick="removeblock(this);" title="Remove block"><i class="mdi mdi-delete"> </i></button>' +
    '</div> </div>';

var append_pertools = '<div class="edit-contols"><div class="btn-group btn-group-sm" role="group">' +
    '<button type="button" contenteditable="false" unselectable="on" class="btn-changeimg btndup btn blue-gradient" onclick="duplicateblock(this);" title="Duplicate block"><i class="mdi mdi-content-duplicate"> </i></button>' +
    '<button type="button" contenteditable="false" unselectable="on" class="btn-changeimg btn btn-danger" onclick="removeblock(this);" title="Remove block"><i class="mdi mdi-delete"> </i></button>' +
    '</div> </div>';

var mySpcificSelection;

function removeblock(dis) {
    $('.selectedrow').remove();
}

function duplicateblock(dis) {
    $('.selectedrow').find('.edit-contols').remove();
    var copyblock = $('.selectedrow').last().parent().html();
    $("#copydiv").html(copyblock);
    $("#copydiv").children().not('.selectedrow').remove();
    var GetHTML = $("#copydiv").html();
    $("#copydiv").html('');
    $($.trim(GetHTML)).insertAfter(".selectedrow");
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
}

function duplicate_timeline(me) {
    var ABC = $('.selectedrow_timeline').last().parent().html();
    $("#copydiv").html(ABC);
    $("#copydiv").children().not('.selectedrow_timeline').remove();
    var GetHTML = $("#copydiv").html();
    $("#copydiv").html('');
    $($.trim(GetHTML)).insertAfter(".selectedrow_timeline");
    $('#mynewrow').find('.edit-contols').remove();
}

function shiftup_timeline(me) {
    var row = $(me).parents("li:first");
    row.insertBefore(row.prev());
}

function shiftdown_timeline(me) {
    var row = $(me).parents("li:first");
    row.insertAfter(row.next());
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

function duplicatebox(me) {
    var ABC = $('.selectedrow').last().parent().html();
    $("#copydiv").html(ABC);
    $("#copydiv").children().not('.selectedrow').remove();
    var GetHTML = $("#copydiv").html();
    $("#copydiv").html('');
    $($.trim(GetHTML)).insertAfter(".selectedrow");
    $('#mynewrow').find('.edit-contols').remove();
}

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
    /*   $(mySpcificSelection).css('font-size', v + 'px')
    $(me).prev().find('span').text(v + "px");
    */
}

function url(i) {
    document.execCommand('Createlink', false, i);
    $('.edittxt').focus();
    return false;
}
function bulletactive()
{
    debugger;
    //number_bullet_container
    let chkaction = $('.selectedrow').find('.number_bullet_container').first().has('ul');
    let chkaction_ol = $('.selectedrow').find('.number_bullet_container').first().has('ol');
    if (chkaction_ol.length == 1) {
        debugger;
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
function numberactive(){
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

        // let editable_block = $('.selectedrow').find('.number_bullet_container').first();
        // let text = "";
        // text = $(editable_block).find('li');
        // text.each(function () {
        //     debugger;
        //     let current = $(this).html();
        //     text = text + current;
        //     //text.concat(' ', current)
        // });
        // $(editable_block).html('');
        // $(editable_block).append($.trim(text));
    }
}
$(function () {
    $(mySpcificSelection).focus();
    // $('#format_bullet').click(function () {
    //     debugger;
    //     // var ABC = $('.selectedrow').last().parent().html();
    //     // $("#copydiv").html(ABC);
    //     // $("#copydiv").children().not('.selectedrow').remove();
    //     // var GetHTML = $("#copydiv").html();
    //     // $("#copydiv").html('');
    //     // $($.trim(GetHTML)).insertAfter(".selectedrow");
    //     // $('#mynewrow').find('.edit-contols').remove();
    //
    //     var chkaction = $('.selectedrow').find('div').first().has('ul');
    //     var chkaction_ol = $('.selectedrow').find('div').first().has('ol');
    //     if (chkaction_ol.length == 1) {
    //         debugger;
    //         var editable_block = $('.selectedrow').find('div').first();
    //         $($(editable_block).find('ol').get().reverse()).each(function () {
    //             $(this).replaceWith($('<ul>' + $(this).html() + '</ul>'));
    //         });
    //         return false;
    //     } else if (chkaction.length == 0) {
    //         var ul = $("<ul>");
    //         var li = null
    //         var p = null;
    //         //var content = null;
    //
    //         var table = $('.selectedrow');
    //         var ths = table.eq(0).find("p");
    //         // var tds = table.find("tr").eq(1).find("td");
    //
    //         ths.each(function () {
    //             li = $("<li>");
    //             p = $("<p>");
    //             //content = $(this).html();
    //             p.html(ths.eq($(this).index()).html());
    //             //li.append(content);
    //             li.append(p);
    //             ul.append(li);
    //         });
    //         // table.replaceWith(ul);
    //         table.find('div').first().html('');
    //         table.find('div').first().html(ul);
    //         return false;
    //     } else {
    //         var editable_block = $('.selectedrow').find('div').first();
    //         var text = "";
    //         text = $(editable_block).find('li');
    //         var text_lgth = text.length;
    //         //text= text.length-1;
    //         text.each(function () {
    //             debugger;
    //             var current = $(this).html();
    //             text = text + current;
    //         });
    //         $(editable_block).html('');
    //         //$('.selectedrow').find('div').first().remove('ul');
    //         //$(editable_block ul).remove();
    //         $(editable_block).append($.trim(text));
    //     }
    // });
    // $('#format_number').click(function () {
    //     var chkaction_ol = $('.selectedrow').find('div').first().has('ol');
    //     var chkaction_ul = $('.selectedrow').find('div').first().has('ul');
    //     if (chkaction_ul.length == 1) {
    //         var editable_block = $('.selectedrow').find('div').first();
    //         $($(editable_block).find('ul').get().reverse()).each(function () {
    //             $(this).replaceWith($('<ol>' + $(this).html() + '</ol>'));
    //         });
    //         return false;
    //     } else if (chkaction_ol.length == 0) {
    //         var ol = $("<ol>");
    //         var li = null
    //         var p = null;
    //         var table = $('.selectedrow');
    //         var ths = table.eq(0).find("p");
    //         ths.each(function () {
    //             li = $("<li>");
    //             p = $("<p>");
    //             p.html(ths.eq($(this).index()).html());
    //             li.append(p);
    //             ol.append(li);
    //         });
    //         table.find('div').first().html('');
    //         table.find('div').first().html(ol);
    //         return false;
    //     } else {
    //         var editable_block = $('.selectedrow').find('div').first();
    //         var text = "";
    //         text = $(editable_block).find('li');
    //         text.each(function () {
    //             debugger;
    //             var current = $(this).html();
    //             text = text + current;
    //             //text.concat(' ', current)
    //         });
    //         $(editable_block).html('');
    //         $(editable_block).append($.trim(text));
    //     }
    // });
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

function header(me) {
    var headerhtml = "<tr onclick='selectrow(this)' class='row_hover' style='text-align: center'><td style='position: relative' class='tbl_cell tbl_logo'>"
        + "<img src='http://saisunjobs.com/webresume/images/logo1.png' style='max-width: 200px; margin-bottom: 10px'/></td></tr>";

    var Selected = Number($(".selectedrow").length);

    if (Selected > 0) {
        $(headerhtml).insertAfter(".selectedrow");
    } else {
        $(headerhtml).insertBefore($(".mainrows:visible tr").last());
    }

}

function address(me) {
    var addr_html = "<tr onclick='selectrow(this)' class='row_hover address_row' style='width:100%; text-align:center; display:inline-block'>" +
        "<td  style='padding-top: 20px; position: relative; width:100%; display:inline-block' class='tbl_cell address_only'>" +
        "<div style='padding: 5px 10px;display:inline-block; position: relative; z-index: 5; outline: none;' contenteditable='true' unselectable='on'>" +
        "<p><font size='3'> <b> 90 Degree Team Task</b></font> <br />Copyright � 2016 <a href='http://www.90degreeteamtask.com'> 90degreeteamtask.com </a></p>" +
        "<p> 1298, jasati Compound, besides Reliance Fresh, Near Parijat building, Jabalpur,482002, M.P. India.  <br />" +
        "<b> E : </b> <a href='mailto:info@90degreeteamtask.com'>info@90degreeteamtask.com</a> ,<b> T : </b> +91-761-2440066</p></div></td></tr> ";

    //    var Selected = Number($(".address_row").length);
    //    //  $(".mainrows1").append(addr_html);


    //    if (Selected == 0) {
    //        $(".mainrows1").append(addr_html);
    //    }
    var Selected = Number($(".selectedrow").length);

    if (Selected > 0) {
        $(addr_html).insertAfter(".selectedrow");
    } else {
        $(addr_html).insertBefore($(".mainrows:visible tr").last());
    }

}

function plaintxt(me) {

    var html_content = "<tr onclick='selectrow(this)' class='row_hover'> <td style='position:relative' class='tbl_cell txtonly'> <div contenteditable='true' unselectable='on' style='padding: 5px 10px; position: relative; z-index: 5; outline: none;'> <p> <font size='5'> It's time to design your email template  </font> </p><p> Click here and give content of your campaign. you can  set the style of this template using toolbox. </p>"
        + "<p>When you're ready to change the look of this block, take a look through the �design� tab to set background colors, borders, and other styles.  </p> </div> </td></tr>";

    var Selected = Number($(".selectedrow").length);

    if (Selected > 0) {
        $(html_content).insertAfter(".selectedrow");
    } else {
        $(html_content).insertBefore($(".mainrows:visible tr").last());
    }
}

function txtwithboarder(me) {
    var html_content = "<tr onclick='selectrow(this)' class='row_hover'> <td style='position:relative; border:solid 2px #666' class='tbl_cell txtonly'> <div contenteditable='true' unselectable='on' style='padding: 5px 10px; position: relative; z-index: 5; outline: none;'> <p> <font size='5'> It's time to design your email template </font> </p><p> Click here and give content of your campaign. you can  set  the different styles of border using tool box.</p>"
        + "<p>When you're ready to change the look of this block, take a look through the �design� tab to set background colors, borders, and other styles.  </p> </div> </td></tr>";

    var Selected = Number($(".selectedrow").length);

    if (Selected > 0) {
        $(html_content).insertAfter(".selectedrow");
    } else {
        $(html_content).insertBefore($(".mainrows:visible tr").last());
    }
}

function imgwithtxt(me) {
    var html_content = "<tr onclick='selectrow(this)' class='row_hover'>"
        + "<td align='center' style='position: relative; padding:10px' class='tbl_cell'>"
        + "<table style='width:100%;' cellpadding='5' cellspacing='5'> <tr>"
        + "<td> <img src='images/noimg_thumb.jpg' class='ui-widget-content imgonly' style='width:200px; float:left'  align='left'/> </td>"
        + "<td valign='top'> "
        + " <div contenteditable='true' unselectable='on' style='padding: 20px 10px; position: relative; z-index: 5; outline: none;'>"
        + "<h3> Give the heading here. </h3>"
        + "<p> Click here and give the content of your email and you can  decorate this block using toolbox. </p> "
        + "<p> When you're ready to change the look of your email, take a look through the �design� tab to set background colors, borders, and other styles. </p>"
        + "</div></td></tr> </table></td></tr>";

    var Selected = Number($(".selectedrow").length);

    if (Selected > 0) {
        $(html_content).insertAfter(".selectedrow");
    } else {
        $(html_content).insertBefore($(".mainrows:visible tr").last());
    }
}

function dualimage(me) {
    var html_content = "<tr onclick='selectrow(this)' class='row_hover'>"
        + "<td style='position: relative' class='tbl_cell noimg'>"
        + "<table style='margin-top: 15px; margin-bottom: 15px;' cellpadding='5'>"
        + "<tbody><tr><td align='center' width='50%' style='padding: 5px; position: relative' class='td_level2'><img src='../../images/noimg_thumb.jpg' style='max-width: 100%' class='ui-widget-content imgonly' />"
        + "<div class='btnchange_img'><i class='fa fa-camera'></i>image<input type='file' class='ctr-file' onchange='changetdimg(this)'></div></td>"
        + "<td align='center' width='50%' style='padding: 5px; position: relative' class='td_level2'><img src='../../images/noimg_thumb.jpg' style='max-width: 100%' class='ui-widget-content imgonly' />"
        + "<div class='btnchange_img'><i class='fa fa-camera'></i>image<input type='file' class='ctr-file' onchange='changetdimg(this)'></div>"
        + "</td></tr></tbody></table></td></tr>";

    var Selected = Number($(".selectedrow").length);

    if (Selected > 0) {
        $(html_content).insertAfter(".selectedrow");
    } else {
        $(html_content).insertBefore($(".mainrows:visible tr").last());
    }
}

function sociallink(me) {
    var html_content = '<tr onclick="selectrow(this)" class="row_hover"> <td align="center" style="position: relative" class="tbl_cell sociallinks">'
        + '<ul class="ul-social-media" id="icon_social">'
        + '<li data-whichone="facebook" style="display:inline-block;list-style:none;"><a href="javascript:void();"><img src="http://saisunjobs.com/webresume/images/editor/facebook.png" style="width:35px;" /></a> </li>'
        + '<li data-whichone="twitter" style="display:inline-block;list-style:none;"><a href="javascript:void();"><img src="http://saisunjobs.com/webresume/images/editor/twitter.png" style="width:35px;" width="35px" /> </a> </li>'
        + '<li data-whichone="linkedin" style="display:inline-block;list-style:none;"><a href="javascript:void();"><img src="http://saisunjobs.com/webresume/images/editor/linkedin.png" style="width:35px;" width="35px"/> </a> </li>'
        + '<li data-whichone="googleplus" style="display:inline-block;list-style:none;"><a href="javascript:void();"><img src="http://saisunjobs.com/webresume/images/editor/googleplus.png" style="width:35px;" width="35px"/> </a> </li>'
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

function imgonly(me) {
    var html_content = "<tr onclick='selectrow(this)' class='row_hover'>"
        + "<td align='center' style='position: relative;' class='tbl_cell'>"
        + "<img src='images/noimg_banner.jpg' style='max-width:100%' class='ui-widget-content imgonly' />"
        + "</td><tr> "

    var Selected = Number($(".selectedrow").length);

    if (Selected > 0) {
        $(html_content).insertAfter(".selectedrow");
    } else {
        $(html_content).insertBefore($(".mainrows:visible tr").last());
    }
}

function imgovertext(me) {
    var html_content = "<tr onclick='selectrow(this)' class='row_hover' style='color:#666; font-size:28px; text-align:center'>"
        + "<td align='center' style='position: relative;' class='tbl_cell'>"
        + "<div style='width:100%; height:200px; display:table; background-image:url(../../images/noimg_thumb.jpg); background-size:cover;background-position:center' class='ui-widget-content imgonly img_bg'> "
        + "<span style='padding:5px; vertical-align:middle; display: table-cell; width:100%;' contenteditable='true' unselectable='on'> Add Text Here </span>"
        + "</div>"
        + "</td><tr>";
    var Selected = Number($(".selectedrow").length);

    if (Selected > 0) {
        $(html_content).insertAfter(".selectedrow");
    } else {
        $(html_content).insertBefore($(".mainrows:visible tr").last());
    }
}

function imgovertext_bottom(me) {
    var html_content = "<tr onclick='selectrow(this)' class='row_hover' style='color:#666; font-size:28px; text-align:center'>"
        + "<td style='position: relative;' class='tbl_cell'>"
        + "<div style='width:100%; height:200px; display:table; background-image:url(../../images/noimg_thumb.jpg); background-size:cover;background-position:center' class='ui-widget-content imgonly img_bg'> "
        + "<span style='padding:5px; vertical-align:bottom; display: table-cell; width:100%;' contenteditable='true' unselectable='on'> Add Text Here </span>"
        + "</div>"
        + "</td><tr>";
    var Selected = Number($(".selectedrow").length);
    if (Selected > 0) {
        $(html_content).insertAfter(".selectedrow");
    } else {
        $(html_content).insertBefore($(".mainrows:visible tr").last());
    }
}

function imgovertext_top(me) {
    var html_content = "<tr onclick='selectrow(this)' class='row_hover' style='color:#666; font-size:28px; text-align:center'>"
        + "<td style='position: relative;' class='tbl_cell'>"
        + "<div style='width:100%; height:200px; display:table; background-image:url(../../images/noimg_thumb.jpg); background-size:cover;background-position:center' class='ui-widget-content imgonly img_bg'> "
        + "<span style='padding:5px; vertical-align:top; display: table-cell; width:100%;' contenteditable='true' unselectable='on'> Add Text Here </span>"
        + "</div>"
        + "</td><tr>";

    var Selected = Number($(".selectedrow").length);

    if (Selected > 0) {
        $(html_content).insertAfter(".selectedrow");
    } else {
        $(html_content).insertBefore($(".mainrows:visible tr").last());
    }
}

function imgwith_bottomtxt(me) {
    var html_content = "<tr onclick='selectrow(this)' class='row_hover'>"
        + "<td style='position:relative' class='tbl_cell'>"
        + " <img src='../../images/noimg_thumb.jpg'  style='max-width:100%' class='ui-widget-content imgonly' />"
        + " <div style='padding:10px; width:100%; position: relative; z-index: 5; outline: none;'contenteditable='true' unselectable='on'>"
        + " <h3>  It's time to design your email template</h3>"
        + "<p> Click here and give content of your campaign. you can set the style of this template using toolbox.</p>"
        + "<p>When you're ready to change the look of this block, take a look through the �design� tab to set background colors, borders, and other styles.</p>"
        + "</td></tr>";

    var Selected = Number($(".selectedrow").length);

    if (Selected > 0) {
        $(html_content).insertAfter(".selectedrow");
    } else {
        $(html_content).insertBefore($(".mainrows:visible tr").last());
    }
}

function imgbunch(me) {
    var html_content = "<tr onclick='selectrow(this)' class='row_hover'>"
        + "<td  align='center' class='noimg tbl_cell' style='position: relative'>"
        + "<table width='100%'><tr>"
        + "<td align='center' width='50%' style='padding:5px; position:relative' class='td_level2'>"
        + "<img src='../../images/noimg_thumb.jpg' style='max-width:100%' class='ui-widget-content imgonly' /><div class='btnchange_img'>"
        + "<i class='fa fa-camera'> </i> image<input type='file' class='ctr-file' onchange='changetdimg(this)'/> </div></td>"
        + "<td align='center' width='50%' style='padding:5px; position:relative' class='td_level2'><img src='../../images/noimg_thumb.jpg' style='max-width:100%' class='ui-widget-content imgonly' /> "
        + " <div class='btnchange_img'><i class='fa fa-camera'> </i> image<input type='file' class='ctr-file' onchange='changetdimg(this)'/> "
        + "</div></td></tr><tr> "
        + "<td align='center' width='50%' style='padding:5px;position:relative' class='td_level2'>"
        + "<img src='images/noimg_thumb.jpg' style='max-width:100%' class='ui-widget-content imgonly' />  <div class='btnchange_img'><i class='fa fa-camera'> </i> image"
        + "<input type='file' class='ctr-file' onchange='changetdimg(this)'/> </div></td>"
        + "<td align='center' width='50%' style='padding:5px; position:relative' class='td_level2'>"
        + "<img src='../../images/noimg_thumb.jpg' style='max-width:100%' class='ui-widget-content imgonly' /> <div class='btnchange_img'><i class='fa fa-camera'> </i> image"
        + "<input type='file' class='ctr-file' onchange='changetdimg(this)'/> </div></td></tr></table></td></tr>";

    var Selected = Number($(".selectedrow").length);

    if (Selected > 0) {
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
    $('.toolbox-type li').css('background-color', 'transparent');
    $('.toolbox-type li').css('color', '#989898');
    $('.toolbox-type li').css('border-left', 'solid 2px #ececec');
    $('#txtstyle').css('background-color', '#1a7fd0');
    $('#txtstyle').css('color', '#ffffff');
    $('#txtstyle').css('border', 'none');
    $('.txt-tools-container').hide();
    $('#txttools').show();
    $('#tool_socialmedia_savebtns').hide();
    $('#editor_buttonbox').show();
}

function social_selection(that) {
    var parentROW = $(that).parent().parent();
    var SelectedOption = $(that).val();
    var PreviousSelected = $(that).attr("data-whatisthis");
    $("#icon_social").find('li[data-whichone="' + $.trim(PreviousSelected) + '"]').remove();
    if (Number($("#icon_social").find('li[data-whichone="' + $.trim(SelectedOption) + '"]').length) == 0) {
        //ADDING ICONS IN TEMPLATE
        $("#icon_social").append('<li data-whichone="' + SelectedOption + '" style="display:inline-block;list-style:none;"><a href="javascript:void();"><img src="http://saisunjobs.com/webresume/images/editor/' + SelectedOption + '.png" style="width:35px"/> </a> </li>');
        $(that).attr("data-whatisthis", SelectedOption);
        parentROW.find("img").attr("src", "http://saisunjobs.com/webresume/images/Editor/" + SelectedOption + ".png");
        parentROW.find('[data-whichremove]').attr("data-whichremove", SelectedOption);
    }
}

$(document).ready(function () {
    var mySpcificSelection1 = $('.email_body');
    var mySpcificSelection2 = $('.email_innerbody');

    // $('#colorpalet_bodyback').colorPalette()
    //     .on('selectColor', function (e) {
    //         //$(mySpcificSelection1).css('background-color', false, e.color);
    //         var checkcolor = e.color;
    //         $('.email_body').css('background-color', checkcolor);
    //     });
    //
    // $('#colorpalet_bodyback2').colorPalette()
    //     .on('selectColor', function (e) {
    //         //$(mySpcificSelection2).css('background-color', false, e.color);
    //         var checkcolor = e.color;
    //         $('.email_innerbody').css('background-color', checkcolor);
    //     });

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
            + "<div class='social-tool-row'><div class='social-tool-icon'><img src='http://saisunjobs.com/webresume/images/editor/" + nextSelectedValue + ".png' width='35px'></div>"
            + "<input type='text' class='form-control' placeholder='Enter page URL here'>"
            + "<span data-whichremove='" + nextSelectedValue + "' onclick='RemoveLink(this);'><i class='mdi mdi-delete' aria-hidden='true'></i></span></div></div>";

        $("#tool_socialmedia .tool-social-box").append(html_content);

        //REMOVING OPTIONS PREVIOUSLY SELECTED REMOVING FROM DROPDOWN
        for (var i in previous) {
            $(".selectoption option[value='" + previous[i] + "']").last().remove();
        }

        if (nextSelectedValue == "") {
            nextSelectedValue = $(".selectoption option:selected").last().val();
            $(".ed_socialblock").last().find("img").attr("src", "http://saisunjobs.com/webresume/images/editor/" + nextSelectedValue + ".png");
            $(".ed_socialblock").last().find('[data-whichremove]').attr("data-whichremove", nextSelectedValue);
        }

        //ADDING ICONS IN TEMPLATE
        $("#icon_social").append('<li data-whichone="' + nextSelectedValue + '" style="display:inline-block;list-style:none;"><a href="javascript:void();"><img src="http://saisunjobs.com/webresume/images/editor/' + nextSelectedValue + '.png" width="35px"/> </a> </li>');
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

    $(window).scroll(function () {
        var scrolltop = $(this).scrollTop();
        if (scrolltop > 1) {
            $('.tool-top').css('position', 'fixed');
        } else {
            $('.tool-top').css('position', 'relative');
        }
    });

    /* $('.txt-tool-heading').click(function () {
    if ($(this).next().is(":visible")) {
    $(this).next().css('display', 'none');
    }
    else {
    $(this).next().css('display', 'block');
    }
    });*/

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

    // $('#colorpalette2').colorPalette()
    //     .on('selectColor', function (e) {
    //         // $(mySpcificSelection).css('color', e.color);
    //         document.execCommand('ForeColor', false, e.color);
    //     });
    // $('#colorpalette3').colorPalette()
    //     .on('selectColor', function (e) {
    //         // $(mySpcificSelection).css('background-color', e.color);
    //         document.execCommand('BackColor', false, e.color);
    //     });
    //
    // $('#colorpalet_back').colorPalette()
    //     .on('selectColor', function (e) {
    //         $(mySpcificSelection).css('background-color', e.color);
    //     });

});

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
