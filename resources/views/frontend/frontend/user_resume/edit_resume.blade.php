@extends('frontend.master.front_master')
@section('title', 'Edit Resume')
@section('content')
    <link rel="stylesheet" href="{{url('public/front').'/'}}css/editor/editor-tools.css" type="text/css"/>
    <link href="{{url('public/front').'/'}}css/media.css" rel="stylesheet" type="text/css"/>

    <input type="hidden" name="rid" id="rid" value="{{($user_resume->template_id)}}">
    <input type="hidden" name="uid" id="uid" value="{{($user_resume->id)}}">


    <script>
        $('#resume_html').find('div').attr('contenteditable', 'true');
        $('#resume_html').find('table tr td').attr('contenteditable', 'true');
    </script>
    <section class="resume_editor_section">
        <div class="container-fluid">
            <div class="row">
                <div class="res-editor_fixed card">
                    <button type="button" onclick="EditorOpen();"
                            class="btn btn-primary btn-sm waves-effect waves-light">
                        <i class="mdi mdi-pencil mr-2"></i>Editor
                    </button>
                    <button type="button" onclick="PreviewResume();"
                            class="btn btn-warning btn-sm waves-effect waves-light">
                        <i class="mdi mdi-eye mr-2"></i>Preview
                    </button>
                </div>
                <div class="col-sm-12 col-lg-3 pr-1">
                    <div class="txt-tools" id="editor_block">
                        <div class="col-xs-12 text-center">
                            <ul class="toolbox-type">
                                <li style="background-color: transparent;width: 50%;color: rgb(152, 152, 152);border-top: none;border-right: none;border-bottom: none;border-left: 2px solid rgb(236, 236, 236);border-image: initial;display: none;"
                                    id="txtstyle">Text Styles
                                </li>
                                <li id="addblocks"
                                    style="display: none; background-color: transparent; width: 33.3%; color: rgb(152, 152, 152); border-left: 2px solid rgb(236, 236, 236);">
                                    Add
                                    Blocks
                                </li>
                                <li id="socialmedia"
                                    style="background-color: rgb(26, 127, 208); width: 100%; color: rgb(255, 255, 255); border: none;">
                                    Create Your Social Link
                                </li>
                            </ul>
                        </div>
                        <div class="txt-tools-container style-scroll"
                             style="background-color: rgb(245, 245, 245);display: none;" id="tools_block">
                            <ul class="tools-img-ul">
                                <li class="tools-img-li" onclick="imgonly(this)">
                                    <img src="{{url('public/front').'/'}}images/editor/icon_3.jpg" class="img-responsive">
                                    <span>Profile Image</span>
                                </li>
                                <li class="tools-img-li" onclick="img_profile(this)">
                                    <img src="{{url('public/front').'/'}}images/editor/icon_profile.jpg"
                                         class="img-responsive">
                                    <span>Profile Image</span>
                                </li>
                                <li class="tools-img-li" onclick="imgwithtxt(this)">
                                    <img src="{{url('public/front').'/'}}images/editor/icon_6.jpg" class="img-responsive">
                                    <span>Image +  text  </span>
                                </li>
                                <li class="tools-img-li" onclick="plaintxt(this)">
                                    <img src="{{url('public/front').'/'}}images/editor/icon_1.jpg" class="img-responsive">
                                    <span>Text Only </span>
                                </li>
                                <li class="tools-img-li" onclick="txtwithboarder(this)">
                                    <img src="{{url('public/front').'/'}}images/editor/icon_2.jpg" class="img-responsive">
                                    <span>Text + Border </span>
                                </li>
                                <li class="tools-img-li" onclick="img_bullet(this)">
                                    <img src="{{url('public/front').'/'}}images/editor/icon_bullet.jpg" class="img-responsive">
                                    <span>Bullet / Points</span>
                                </li>
                                <li class="tools-img-li" onclick="img_Numbering(this)">
                                    <img src="{{url('public/front').'/'}}images/editor/icon_number.jpg" class="img-responsive">
                                    <span>Numbering / Points</span>
                                </li>


                                <li class="tools-img-li" onclick="sociallink(this)">
                                    <img src="{{url('public/front').'/'}}images/editor/icon_social.jpg" class="img-responsive">
                                    <span>Social Media</span>
                                </li>
                                <li class="tools-img-li" onclick="sociallink2(this)">
                                    <img src="{{url('public/front').'/'}}images/editor/icon_social1.jpg"
                                         class="img-responsive">
                                    <span>Social Media</span>
                                </li>

                                <li class="tools-img-li" onclick="imgovertext_top(this)">
                                    <img src="{{url('public/front').'/'}}images/editor/txt_top.jpg" class="img-responsive">
                                    <span>Text top + Image  </span>
                                </li>
                                <li class="tools-img-li" onclick="imgovertext(this)">
                                    <img src="{{url('public/front').'/'}}images/editor/imageovertxt.jpg"
                                         class="img-responsive">
                                    <span>Text Middle + Image  </span>
                                </li>
                                <li class="tools-img-li" onclick="imgovertext_bottom(this)">
                                    <img src="{{url('public/front').'/'}}images/editor/txt_bottom.jpg" class="img-responsive">
                                    <span>Text Bottom + Image  </span>
                                </li>


                            </ul>
                        </div>
                        <div class="txt-tools-container style-scroll" id="txttools" style="display: none;">
                            <div class="txt-tools-box">
                                <div class="txt-tools-show">
                                    <ul class="txt-tools-ul">
                                        <li><a href="#" id="bold" class="mdi mdi-format-bold" data-toggle="tooltip"
                                               title="" data-original-title="Bold"></a></li>
                                        <li><a href="#" id="italic" class="mdi mdi-format-italic" data-placement="top"
                                               data-toggle="tooltip" title="" data-original-title="Italic"></a></li>
                                        <li><a href="#" id="underline" class="mdi mdi-format-underline"
                                               data-toggle="tooltip" title="" data-original-title="Underline"></a></li>
                                        <li><a class="mdi mdi-format-list-bulleted" onclick="bulletactive();"
                                               data-toggle="tooltip" title="" data-original-title="Bullet"></a></li>
                                        <li><a class="mdi mdi-format-list-numbered" onclick="numberactive();"
                                               data-toggle="tooltip" title="" data-original-title="Number"></a></li>
                                        <!--                                        <li><a href="#" class="mdi mdi-format-list-bulleted" id="format_bullet"-->
                                        <!--                                               data-toggle="tooltip" title="Bullet"></a></li>-->
                                        <!--                                        <li><a href="#" class="mdi mdi-format-list-numbered" id="format_number"-->
                                        <!--                                               data-toggle="tooltip" title="Number"></a></li>-->

                                    </ul>
                                </div>
                                <div class="txt-tools-show">
                                    <ul class="txt-tools-ul">
                                        <li onclick="left(this)" class="active_alignment"><span
                                                    class="mdi mdi-format-align-left" data-toggle="tooltip" title=""
                                                    data-original-title="Left align"></span></li>
                                        <li onclick="right(this)" class=""><span class="mdi mdi-format-align-right"
                                                                                 data-toggle="tooltip" title=""
                                                                                 data-original-title="Right align"></span>
                                        </li>
                                        <li onclick="center(this)" class=""><span class="mdi mdi-format-align-center"
                                                                                  data-toggle="tooltip" title=""
                                                                                  data-original-title="Center align"></span>
                                        </li>
                                        <li onclick="justify(this)"><span class="mdi mdi-format-align-justify"
                                                                          data-toggle="tooltip" title=""
                                                                          data-original-title="Justify align"></span>
                                        </li>
                                        <li><a href="#" class="mdi mdi-link" id="alink" data-toggle="tooltip" title=""
                                               data-original-title="Link"></a></li>
                                    </ul>
                                </div>
                                <div class="txt-tools-show dropdown" style="display: none;">
                                    <div class="txt-tool-heading">
                                        Fonts Style
                                        <div class="btn-group pull-right">
                                            <a onclick="ShowFontFamily();" class="dropdown-toggle family_btnclick"><span
                                                        class="mdi mdi-format-color-text pull-right"></span></a>
                                            <ul id="font-family-popup"
                                                class="font-family-box card style-scroll list-unstyled scale0"
                                                x-placement="top-start">
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: Poppins, sans-serif"
                                                    data-family="Poppins, sans-serif">Default Fonts
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: Abadi MT Condensed Light"
                                                    data-family="Abadi MT Condensed Light">Abadi MT Condensed Light
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: Aldhabi" data-family="Aldhabi">Aldhabi
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: Arial" data-family="Arial">Arial
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: Arial Black" data-family="Arial Black">Arial
                                                    Black
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: Calibri" data-family="Calibri">Calibri
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: Calisto MT" data-family="Calisto MT">Calisto MT
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: Cambria" data-family="Cambria">Cambria
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: Century Gothic" data-family="Century Gothic">
                                                    Century Gothic
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: Consolas" data-family="Consolas">Consolas
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: Constantia" data-family="Constantia">Constantia
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: Copperplate Gothic"
                                                    data-family="Copperplate Gothic">Copperplate Gothic
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: Corbel" data-family="Corbel">Corbel
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: Courier New" data-family="Courier New">Courier
                                                    New
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: DaunPenh" data-family="DaunPenh">DaunPenh
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: David" data-family="David">David
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: Franklin Gothic Medium"
                                                    data-family="Franklin Gothic Medium">Franklin Gothic Medium
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: News Gothic MT" data-family="News Gothic MT">
                                                    News Gothic MT
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: Tahoma" data-family="Tahoma">Tahoma
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: Times New Roman" data-family="Times New Roman">
                                                    Times New Roman
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: Trebuchet MS" data-family="Trebuchet MS">
                                                    Trebuchet MS
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: Verdana" data-family="Verdana">Verdana
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: Trebuchet MS" data-family="Trebuchet MS">
                                                    Trebuchet MS
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: 'Playball', cursive;"
                                                    data-family="'Playball', cursive">Playball
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: 'Teko', sans-serif;"
                                                    data-family="'Teko', sans-serif">Teko
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: 'Great Vibes', cursive;"
                                                    data-family="'Great Vibes', cursive">Great Vibes
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: 'Parisienne', cursive;"
                                                    data-family="'Parisienne', cursive">Parisienne
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: 'Rationale', sans-serif;"
                                                    data-family="'Rationale', sans-serif">Rationale
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: 'Roboto', sans-serif;"
                                                    data-family="'Roboto', sans-serif">Roboto
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: 'Oswald', sans-serif;"
                                                    data-family="'Oswald', sans-serif">Oswald
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: 'Raleway', sans-serif;"
                                                    data-family="'Raleway', sans-serif">Raleway
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: 'Roboto Slab', serif;"
                                                    data-family="'Roboto Slab', serif">Roboto Slab
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: 'Fjalla One', sans-serif;"
                                                    data-family="'Fjalla One', sans-serif">Fjalla One
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: 'Poiret One', cursive;"
                                                    data-family="'Poiret One', cursive">Poiret One
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: 'Abel', sans-serif;"
                                                    data-family="'Abel', sans-serif">Abel
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: 'Josefin Sans', sans-serif;"
                                                    data-family="'Josefin Sans', sans-serif">Josefin Sans
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: 'Pacifico', cursive;"
                                                    data-family="'Pacifico', cursive">Pacifico
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: 'Dancing Script', cursive;"
                                                    data-family="'Dancing Script', cursive">Dancing Script
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: 'Ropa Sans', sans-serif;"
                                                    data-family="'Ropa Sans', sans-serif">Ropa Sans
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: 'Courgette', cursive;"
                                                    data-family="'Courgette', cursive">Courgette
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: 'Satisfy', cursive;"
                                                    data-family="'Satisfy', cursive">Satisfy
                                                </li>
                                                <li onclick="getfont(this)" onmouseenter="getfont(this);"
                                                    style="font-family: 'Cookie', cursive;"
                                                    data-family="'Cookie', cursive">Cookie
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="txt-tools-show dropdown" style="
    display: none;
">
                                    <div class="txt-tool-heading">
                                        Text Color
                                        <div class="btn-group pull-right">
                                            <a onmouseover="InitTextColor();" id="text-color-picker"
                                               class="dropdown-toggle" data-toggle="dropdown"
                                               aria-expanded="false"><span
                                                        class="mdi mdi-format-color-text pull-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="txt-tools-show dropdown" style="display: none;">
                                    <div class="txt-tool-heading">
                                        Resume Background Color
                                        <div class="btn-group pull-right">
                                            <a id="resume_bgcolor" class="dropdown-toggle" data-toggle="dropdown"
                                               aria-expanded="false"><span
                                                        class="mdi mdi-format-color-fill pull-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="txt-tools-show dropdown">
                                    <div class="txt-tool-heading">
                                        Background Color
                                        <div class="btn-group pull-right">
                                            <a id="perticular_content_bgcolor" class="dropdown-toggle"
                                               data-toggle="dropdown" aria-expanded="false"><span
                                                        class="mdi mdi-format-color-fill pull-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="txt-tools-show dropdown" style="display: none;">
                                    <div class="txt-tool-heading">
                                        Resume Background Color
                                        <div class="btn-group pull-right">
                                            <a onclick="ShowColorsBlock(this);" class="dropdown-toggle"
                                               data-toggle="dropdown" aria-expanded="false"><span
                                                        class="mdi mdi-format-color-fill pull-right"></span></a>
                                            <ul class="dropdown-menu color_plate_box card scale0">
                                                <li>
                                                    <div class="color_heading">
                                                        Outer color
                                                    </div>
                                                    <div id="colorpalet_bodyback" class="bootstrap-colorpalette">
                                                        <div>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#000000"
                                                                    data-value="#000000" title="#000000"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#424242"
                                                                    data-value="#424242" title="#424242"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#636363"
                                                                    data-value="#636363" title="#636363"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#9C9C94"
                                                                    data-value="#9C9C94" title="#9C9C94"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#CEC6CE"
                                                                    data-value="#CEC6CE" title="#CEC6CE"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#EFEFEF"
                                                                    data-value="#EFEFEF" title="#EFEFEF"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FFFFFF"
                                                                    data-value="#FFFFFF" title="#FFFFFF"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:transparent"
                                                                    data-value="transparent"
                                                                    title="transparent"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FF0000"
                                                                    data-value="#FF0000" title="#FF0000"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FF9C00"
                                                                    data-value="#FF9C00" title="#FF9C00"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FFFF00"
                                                                    data-value="#FFFF00" title="#FFFF00"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#00FF00"
                                                                    data-value="#00FF00" title="#00FF00"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#00FFFF"
                                                                    data-value="#00FFFF" title="#00FFFF"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#0000FF"
                                                                    data-value="#0000FF" title="#0000FF"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#9C00FF"
                                                                    data-value="#9C00FF" title="#9C00FF"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FF00FF"
                                                                    data-value="#FF00FF" title="#FF00FF"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#F7C6CE"
                                                                    data-value="#F7C6CE" title="#F7C6CE"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FFE7CE"
                                                                    data-value="#FFE7CE" title="#FFE7CE"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FFEFC6"
                                                                    data-value="#FFEFC6" title="#FFEFC6"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#D6EFD6"
                                                                    data-value="#D6EFD6" title="#D6EFD6"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#CEDEE7"
                                                                    data-value="#CEDEE7" title="#CEDEE7"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#CEE7F7"
                                                                    data-value="#CEE7F7" title="#CEE7F7"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#D6D6E7"
                                                                    data-value="#D6D6E7" title="#D6D6E7"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#E7D6DE"
                                                                    data-value="#E7D6DE" title="#E7D6DE"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#E79C9C"
                                                                    data-value="#E79C9C" title="#E79C9C"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FFC69C"
                                                                    data-value="#FFC69C" title="#FFC69C"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FFE79C"
                                                                    data-value="#FFE79C" title="#FFE79C"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#B5D6A5"
                                                                    data-value="#B5D6A5" title="#B5D6A5"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#A5C6CE"
                                                                    data-value="#A5C6CE" title="#A5C6CE"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#9CC6EF"
                                                                    data-value="#9CC6EF" title="#9CC6EF"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#B5A5D6"
                                                                    data-value="#B5A5D6" title="#B5A5D6"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#D6A5BD"
                                                                    data-value="#D6A5BD" title="#D6A5BD"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#E76363"
                                                                    data-value="#E76363" title="#E76363"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#F7AD6B"
                                                                    data-value="#F7AD6B" title="#F7AD6B"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FFD663"
                                                                    data-value="#FFD663" title="#FFD663"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#94BD7B"
                                                                    data-value="#94BD7B" title="#94BD7B"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#73A5AD"
                                                                    data-value="#73A5AD" title="#73A5AD"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#6BADDE"
                                                                    data-value="#6BADDE" title="#6BADDE"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#8C7BC6"
                                                                    data-value="#8C7BC6" title="#8C7BC6"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#C67BA5"
                                                                    data-value="#C67BA5" title="#C67BA5"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#CE0000"
                                                                    data-value="#CE0000" title="#CE0000"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#E79439"
                                                                    data-value="#E79439" title="#E79439"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#EFC631"
                                                                    data-value="#EFC631" title="#EFC631"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#6BA54A"
                                                                    data-value="#6BA54A" title="#6BA54A"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#4A7B8C"
                                                                    data-value="#4A7B8C" title="#4A7B8C"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#3984C6"
                                                                    data-value="#3984C6" title="#3984C6"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#634AA5"
                                                                    data-value="#634AA5" title="#634AA5"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#A54A7B"
                                                                    data-value="#A54A7B" title="#A54A7B"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#9C0000"
                                                                    data-value="#9C0000" title="#9C0000"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#B56308"
                                                                    data-value="#B56308" title="#B56308"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#BD9400"
                                                                    data-value="#BD9400" title="#BD9400"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#397B21"
                                                                    data-value="#397B21" title="#397B21"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#104A5A"
                                                                    data-value="#104A5A" title="#104A5A"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#085294"
                                                                    data-value="#085294" title="#085294"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#311873"
                                                                    data-value="#311873" title="#311873"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#731842"
                                                                    data-value="#731842" title="#731842"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#630000"
                                                                    data-value="#630000" title="#630000"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#7B3900"
                                                                    data-value="#7B3900" title="#7B3900"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#846300"
                                                                    data-value="#846300" title="#846300"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#295218"
                                                                    data-value="#295218" title="#295218"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#083139"
                                                                    data-value="#083139" title="#083139"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#003163"
                                                                    data-value="#003163" title="#003163"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#21104A"
                                                                    data-value="#21104A" title="#21104A"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#4A1031"
                                                                    data-value="#4A1031" title="#4A1031"></button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="color_heading">
                                                        &nbsp;inner color
                                                    </div>
                                                    <div id="colorpalet_bodyback2" class="bootstrap-colorpalette">
                                                        <div>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#000000"
                                                                    data-value="#000000" title="#000000"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#424242"
                                                                    data-value="#424242" title="#424242"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#636363"
                                                                    data-value="#636363" title="#636363"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#9C9C94"
                                                                    data-value="#9C9C94" title="#9C9C94"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#CEC6CE"
                                                                    data-value="#CEC6CE" title="#CEC6CE"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#EFEFEF"
                                                                    data-value="#EFEFEF" title="#EFEFEF"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FFFFFF"
                                                                    data-value="#FFFFFF" title="#FFFFFF"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:transparent"
                                                                    data-value="transparent"
                                                                    title="transparent"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FF0000"
                                                                    data-value="#FF0000" title="#FF0000"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FF9C00"
                                                                    data-value="#FF9C00" title="#FF9C00"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FFFF00"
                                                                    data-value="#FFFF00" title="#FFFF00"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#00FF00"
                                                                    data-value="#00FF00" title="#00FF00"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#00FFFF"
                                                                    data-value="#00FFFF" title="#00FFFF"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#0000FF"
                                                                    data-value="#0000FF" title="#0000FF"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#9C00FF"
                                                                    data-value="#9C00FF" title="#9C00FF"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FF00FF"
                                                                    data-value="#FF00FF" title="#FF00FF"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#F7C6CE"
                                                                    data-value="#F7C6CE" title="#F7C6CE"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FFE7CE"
                                                                    data-value="#FFE7CE" title="#FFE7CE"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FFEFC6"
                                                                    data-value="#FFEFC6" title="#FFEFC6"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#D6EFD6"
                                                                    data-value="#D6EFD6" title="#D6EFD6"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#CEDEE7"
                                                                    data-value="#CEDEE7" title="#CEDEE7"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#CEE7F7"
                                                                    data-value="#CEE7F7" title="#CEE7F7"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#D6D6E7"
                                                                    data-value="#D6D6E7" title="#D6D6E7"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#E7D6DE"
                                                                    data-value="#E7D6DE" title="#E7D6DE"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#E79C9C"
                                                                    data-value="#E79C9C" title="#E79C9C"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FFC69C"
                                                                    data-value="#FFC69C" title="#FFC69C"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FFE79C"
                                                                    data-value="#FFE79C" title="#FFE79C"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#B5D6A5"
                                                                    data-value="#B5D6A5" title="#B5D6A5"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#A5C6CE"
                                                                    data-value="#A5C6CE" title="#A5C6CE"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#9CC6EF"
                                                                    data-value="#9CC6EF" title="#9CC6EF"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#B5A5D6"
                                                                    data-value="#B5A5D6" title="#B5A5D6"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#D6A5BD"
                                                                    data-value="#D6A5BD" title="#D6A5BD"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#E76363"
                                                                    data-value="#E76363" title="#E76363"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#F7AD6B"
                                                                    data-value="#F7AD6B" title="#F7AD6B"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FFD663"
                                                                    data-value="#FFD663" title="#FFD663"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#94BD7B"
                                                                    data-value="#94BD7B" title="#94BD7B"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#73A5AD"
                                                                    data-value="#73A5AD" title="#73A5AD"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#6BADDE"
                                                                    data-value="#6BADDE" title="#6BADDE"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#8C7BC6"
                                                                    data-value="#8C7BC6" title="#8C7BC6"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#C67BA5"
                                                                    data-value="#C67BA5" title="#C67BA5"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#CE0000"
                                                                    data-value="#CE0000" title="#CE0000"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#E79439"
                                                                    data-value="#E79439" title="#E79439"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#EFC631"
                                                                    data-value="#EFC631" title="#EFC631"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#6BA54A"
                                                                    data-value="#6BA54A" title="#6BA54A"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#4A7B8C"
                                                                    data-value="#4A7B8C" title="#4A7B8C"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#3984C6"
                                                                    data-value="#3984C6" title="#3984C6"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#634AA5"
                                                                    data-value="#634AA5" title="#634AA5"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#A54A7B"
                                                                    data-value="#A54A7B" title="#A54A7B"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#9C0000"
                                                                    data-value="#9C0000" title="#9C0000"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#B56308"
                                                                    data-value="#B56308" title="#B56308"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#BD9400"
                                                                    data-value="#BD9400" title="#BD9400"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#397B21"
                                                                    data-value="#397B21" title="#397B21"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#104A5A"
                                                                    data-value="#104A5A" title="#104A5A"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#085294"
                                                                    data-value="#085294" title="#085294"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#311873"
                                                                    data-value="#311873" title="#311873"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#731842"
                                                                    data-value="#731842" title="#731842"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#630000"
                                                                    data-value="#630000" title="#630000"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#7B3900"
                                                                    data-value="#7B3900" title="#7B3900"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#846300"
                                                                    data-value="#846300" title="#846300"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#295218"
                                                                    data-value="#295218" title="#295218"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#083139"
                                                                    data-value="#083139" title="#083139"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#003163"
                                                                    data-value="#003163" title="#003163"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#21104A"
                                                                    data-value="#21104A" title="#21104A"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#4A1031"
                                                                    data-value="#4A1031" title="#4A1031"></button>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="txt-tools-show dropdown" style="display: none;">
                                    <div class="txt-tool-heading">
                                        Background Color
                                        <div class="btn-group pull-right">
                                            <a onclick="ShowColorsBlock(this);" id="A1" class="dropdown-toggle"
                                               data-toggle="dropdown" aria-expanded="false"><span
                                                        class="mdi mdi-format-color-fill pull-right"></span></a>
                                            <div class="dropdown-menu color_plate_box card scale0">
                                                <div id="colorpalet_back" class="bootstrap-colorpalette">
                                                    <div>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#000000" data-value="#000000"
                                                                title="#000000"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#424242" data-value="#424242"
                                                                title="#424242"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#636363" data-value="#636363"
                                                                title="#636363"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#9C9C94" data-value="#9C9C94"
                                                                title="#9C9C94"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#CEC6CE" data-value="#CEC6CE"
                                                                title="#CEC6CE"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#EFEFEF" data-value="#EFEFEF"
                                                                title="#EFEFEF"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#FFFFFF" data-value="#FFFFFF"
                                                                title="#FFFFFF"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:transparent"
                                                                data-value="transparent" title="transparent"></button>
                                                    </div>
                                                    <div>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#FF0000" data-value="#FF0000"
                                                                title="#FF0000"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#FF9C00" data-value="#FF9C00"
                                                                title="#FF9C00"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#FFFF00" data-value="#FFFF00"
                                                                title="#FFFF00"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#00FF00" data-value="#00FF00"
                                                                title="#00FF00"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#00FFFF" data-value="#00FFFF"
                                                                title="#00FFFF"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#0000FF" data-value="#0000FF"
                                                                title="#0000FF"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#9C00FF" data-value="#9C00FF"
                                                                title="#9C00FF"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#FF00FF" data-value="#FF00FF"
                                                                title="#FF00FF"></button>
                                                    </div>
                                                    <div>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#F7C6CE" data-value="#F7C6CE"
                                                                title="#F7C6CE"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#FFE7CE" data-value="#FFE7CE"
                                                                title="#FFE7CE"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#FFEFC6" data-value="#FFEFC6"
                                                                title="#FFEFC6"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#D6EFD6" data-value="#D6EFD6"
                                                                title="#D6EFD6"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#CEDEE7" data-value="#CEDEE7"
                                                                title="#CEDEE7"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#CEE7F7" data-value="#CEE7F7"
                                                                title="#CEE7F7"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#D6D6E7" data-value="#D6D6E7"
                                                                title="#D6D6E7"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#E7D6DE" data-value="#E7D6DE"
                                                                title="#E7D6DE"></button>
                                                    </div>
                                                    <div>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#E79C9C" data-value="#E79C9C"
                                                                title="#E79C9C"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#FFC69C" data-value="#FFC69C"
                                                                title="#FFC69C"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#FFE79C" data-value="#FFE79C"
                                                                title="#FFE79C"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#B5D6A5" data-value="#B5D6A5"
                                                                title="#B5D6A5"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#A5C6CE" data-value="#A5C6CE"
                                                                title="#A5C6CE"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#9CC6EF" data-value="#9CC6EF"
                                                                title="#9CC6EF"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#B5A5D6" data-value="#B5A5D6"
                                                                title="#B5A5D6"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#D6A5BD" data-value="#D6A5BD"
                                                                title="#D6A5BD"></button>
                                                    </div>
                                                    <div>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#E76363" data-value="#E76363"
                                                                title="#E76363"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#F7AD6B" data-value="#F7AD6B"
                                                                title="#F7AD6B"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#FFD663" data-value="#FFD663"
                                                                title="#FFD663"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#94BD7B" data-value="#94BD7B"
                                                                title="#94BD7B"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#73A5AD" data-value="#73A5AD"
                                                                title="#73A5AD"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#6BADDE" data-value="#6BADDE"
                                                                title="#6BADDE"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#8C7BC6" data-value="#8C7BC6"
                                                                title="#8C7BC6"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#C67BA5" data-value="#C67BA5"
                                                                title="#C67BA5"></button>
                                                    </div>
                                                    <div>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#CE0000" data-value="#CE0000"
                                                                title="#CE0000"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#E79439" data-value="#E79439"
                                                                title="#E79439"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#EFC631" data-value="#EFC631"
                                                                title="#EFC631"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#6BA54A" data-value="#6BA54A"
                                                                title="#6BA54A"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#4A7B8C" data-value="#4A7B8C"
                                                                title="#4A7B8C"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#3984C6" data-value="#3984C6"
                                                                title="#3984C6"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#634AA5" data-value="#634AA5"
                                                                title="#634AA5"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#A54A7B" data-value="#A54A7B"
                                                                title="#A54A7B"></button>
                                                    </div>
                                                    <div>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#9C0000" data-value="#9C0000"
                                                                title="#9C0000"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#B56308" data-value="#B56308"
                                                                title="#B56308"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#BD9400" data-value="#BD9400"
                                                                title="#BD9400"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#397B21" data-value="#397B21"
                                                                title="#397B21"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#104A5A" data-value="#104A5A"
                                                                title="#104A5A"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#085294" data-value="#085294"
                                                                title="#085294"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#311873" data-value="#311873"
                                                                title="#311873"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#731842" data-value="#731842"
                                                                title="#731842"></button>
                                                    </div>
                                                    <div>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#630000" data-value="#630000"
                                                                title="#630000"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#7B3900" data-value="#7B3900"
                                                                title="#7B3900"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#846300" data-value="#846300"
                                                                title="#846300"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#295218" data-value="#295218"
                                                                title="#295218"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#083139" data-value="#083139"
                                                                title="#083139"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#003163" data-value="#003163"
                                                                title="#003163"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#21104A" data-value="#21104A"
                                                                title="#21104A"></button>
                                                        <button type="button" class="btn-color"
                                                                style="background-color:#4A1031" data-value="#4A1031"
                                                                title="#4A1031"></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="txt-tools-show dropdown" style="display: none;">
                                    <div class="txt-tool-heading">
                                        Text Color
                                        <div class="btn-group pull-right">
                                            <a onmouseenter="ShowColorsBlock(this);" id="selected-color2"
                                               class="dropdown-toggle" data-toggle="dropdown"
                                               aria-expanded="false"><span
                                                        class="mdi mdi-format-text-variant pull-right"></span></a>
                                            <ul class="dropdown-menu color_plate_box card scale0">
                                                <li style="display: inline-block;">
                                                    <div>
                                                        &nbsp;Fore color
                                                    </div>
                                                    <div id="colorpalette2" class="bootstrap-colorpalette">
                                                        <div>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#000000"
                                                                    data-value="#000000" title="#000000"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#424242"
                                                                    data-value="#424242" title="#424242"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#636363"
                                                                    data-value="#636363" title="#636363"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#9C9C94"
                                                                    data-value="#9C9C94" title="#9C9C94"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#CEC6CE"
                                                                    data-value="#CEC6CE" title="#CEC6CE"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#EFEFEF"
                                                                    data-value="#EFEFEF" title="#EFEFEF"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FFFFFF"
                                                                    data-value="#FFFFFF" title="#FFFFFF"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:transparent"
                                                                    data-value="transparent"
                                                                    title="transparent"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FF0000"
                                                                    data-value="#FF0000" title="#FF0000"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FF9C00"
                                                                    data-value="#FF9C00" title="#FF9C00"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FFFF00"
                                                                    data-value="#FFFF00" title="#FFFF00"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#00FF00"
                                                                    data-value="#00FF00" title="#00FF00"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#00FFFF"
                                                                    data-value="#00FFFF" title="#00FFFF"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#0000FF"
                                                                    data-value="#0000FF" title="#0000FF"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#9C00FF"
                                                                    data-value="#9C00FF" title="#9C00FF"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FF00FF"
                                                                    data-value="#FF00FF" title="#FF00FF"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#F7C6CE"
                                                                    data-value="#F7C6CE" title="#F7C6CE"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FFE7CE"
                                                                    data-value="#FFE7CE" title="#FFE7CE"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FFEFC6"
                                                                    data-value="#FFEFC6" title="#FFEFC6"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#D6EFD6"
                                                                    data-value="#D6EFD6" title="#D6EFD6"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#CEDEE7"
                                                                    data-value="#CEDEE7" title="#CEDEE7"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#CEE7F7"
                                                                    data-value="#CEE7F7" title="#CEE7F7"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#D6D6E7"
                                                                    data-value="#D6D6E7" title="#D6D6E7"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#E7D6DE"
                                                                    data-value="#E7D6DE" title="#E7D6DE"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#E79C9C"
                                                                    data-value="#E79C9C" title="#E79C9C"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FFC69C"
                                                                    data-value="#FFC69C" title="#FFC69C"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FFE79C"
                                                                    data-value="#FFE79C" title="#FFE79C"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#B5D6A5"
                                                                    data-value="#B5D6A5" title="#B5D6A5"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#A5C6CE"
                                                                    data-value="#A5C6CE" title="#A5C6CE"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#9CC6EF"
                                                                    data-value="#9CC6EF" title="#9CC6EF"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#B5A5D6"
                                                                    data-value="#B5A5D6" title="#B5A5D6"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#D6A5BD"
                                                                    data-value="#D6A5BD" title="#D6A5BD"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#E76363"
                                                                    data-value="#E76363" title="#E76363"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#F7AD6B"
                                                                    data-value="#F7AD6B" title="#F7AD6B"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FFD663"
                                                                    data-value="#FFD663" title="#FFD663"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#94BD7B"
                                                                    data-value="#94BD7B" title="#94BD7B"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#73A5AD"
                                                                    data-value="#73A5AD" title="#73A5AD"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#6BADDE"
                                                                    data-value="#6BADDE" title="#6BADDE"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#8C7BC6"
                                                                    data-value="#8C7BC6" title="#8C7BC6"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#C67BA5"
                                                                    data-value="#C67BA5" title="#C67BA5"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#CE0000"
                                                                    data-value="#CE0000" title="#CE0000"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#E79439"
                                                                    data-value="#E79439" title="#E79439"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#EFC631"
                                                                    data-value="#EFC631" title="#EFC631"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#6BA54A"
                                                                    data-value="#6BA54A" title="#6BA54A"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#4A7B8C"
                                                                    data-value="#4A7B8C" title="#4A7B8C"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#3984C6"
                                                                    data-value="#3984C6" title="#3984C6"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#634AA5"
                                                                    data-value="#634AA5" title="#634AA5"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#A54A7B"
                                                                    data-value="#A54A7B" title="#A54A7B"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#9C0000"
                                                                    data-value="#9C0000" title="#9C0000"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#B56308"
                                                                    data-value="#B56308" title="#B56308"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#BD9400"
                                                                    data-value="#BD9400" title="#BD9400"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#397B21"
                                                                    data-value="#397B21" title="#397B21"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#104A5A"
                                                                    data-value="#104A5A" title="#104A5A"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#085294"
                                                                    data-value="#085294" title="#085294"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#311873"
                                                                    data-value="#311873" title="#311873"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#731842"
                                                                    data-value="#731842" title="#731842"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#630000"
                                                                    data-value="#630000" title="#630000"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#7B3900"
                                                                    data-value="#7B3900" title="#7B3900"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#846300"
                                                                    data-value="#846300" title="#846300"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#295218"
                                                                    data-value="#295218" title="#295218"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#083139"
                                                                    data-value="#083139" title="#083139"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#003163"
                                                                    data-value="#003163" title="#003163"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#21104A"
                                                                    data-value="#21104A" title="#21104A"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#4A1031"
                                                                    data-value="#4A1031" title="#4A1031"></button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li style="display: inline-block;">
                                                    <div>
                                                        &nbsp;Back color
                                                    </div>
                                                    <div id="colorpalette3" class="bootstrap-colorpalette">
                                                        <div>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#000000"
                                                                    data-value="#000000" title="#000000"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#424242"
                                                                    data-value="#424242" title="#424242"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#636363"
                                                                    data-value="#636363" title="#636363"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#9C9C94"
                                                                    data-value="#9C9C94" title="#9C9C94"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#CEC6CE"
                                                                    data-value="#CEC6CE" title="#CEC6CE"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#EFEFEF"
                                                                    data-value="#EFEFEF" title="#EFEFEF"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FFFFFF"
                                                                    data-value="#FFFFFF" title="#FFFFFF"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:transparent"
                                                                    data-value="transparent"
                                                                    title="transparent"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FF0000"
                                                                    data-value="#FF0000" title="#FF0000"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FF9C00"
                                                                    data-value="#FF9C00" title="#FF9C00"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FFFF00"
                                                                    data-value="#FFFF00" title="#FFFF00"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#00FF00"
                                                                    data-value="#00FF00" title="#00FF00"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#00FFFF"
                                                                    data-value="#00FFFF" title="#00FFFF"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#0000FF"
                                                                    data-value="#0000FF" title="#0000FF"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#9C00FF"
                                                                    data-value="#9C00FF" title="#9C00FF"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FF00FF"
                                                                    data-value="#FF00FF" title="#FF00FF"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#F7C6CE"
                                                                    data-value="#F7C6CE" title="#F7C6CE"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FFE7CE"
                                                                    data-value="#FFE7CE" title="#FFE7CE"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FFEFC6"
                                                                    data-value="#FFEFC6" title="#FFEFC6"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#D6EFD6"
                                                                    data-value="#D6EFD6" title="#D6EFD6"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#CEDEE7"
                                                                    data-value="#CEDEE7" title="#CEDEE7"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#CEE7F7"
                                                                    data-value="#CEE7F7" title="#CEE7F7"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#D6D6E7"
                                                                    data-value="#D6D6E7" title="#D6D6E7"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#E7D6DE"
                                                                    data-value="#E7D6DE" title="#E7D6DE"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#E79C9C"
                                                                    data-value="#E79C9C" title="#E79C9C"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FFC69C"
                                                                    data-value="#FFC69C" title="#FFC69C"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FFE79C"
                                                                    data-value="#FFE79C" title="#FFE79C"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#B5D6A5"
                                                                    data-value="#B5D6A5" title="#B5D6A5"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#A5C6CE"
                                                                    data-value="#A5C6CE" title="#A5C6CE"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#9CC6EF"
                                                                    data-value="#9CC6EF" title="#9CC6EF"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#B5A5D6"
                                                                    data-value="#B5A5D6" title="#B5A5D6"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#D6A5BD"
                                                                    data-value="#D6A5BD" title="#D6A5BD"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#E76363"
                                                                    data-value="#E76363" title="#E76363"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#F7AD6B"
                                                                    data-value="#F7AD6B" title="#F7AD6B"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#FFD663"
                                                                    data-value="#FFD663" title="#FFD663"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#94BD7B"
                                                                    data-value="#94BD7B" title="#94BD7B"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#73A5AD"
                                                                    data-value="#73A5AD" title="#73A5AD"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#6BADDE"
                                                                    data-value="#6BADDE" title="#6BADDE"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#8C7BC6"
                                                                    data-value="#8C7BC6" title="#8C7BC6"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#C67BA5"
                                                                    data-value="#C67BA5" title="#C67BA5"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#CE0000"
                                                                    data-value="#CE0000" title="#CE0000"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#E79439"
                                                                    data-value="#E79439" title="#E79439"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#EFC631"
                                                                    data-value="#EFC631" title="#EFC631"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#6BA54A"
                                                                    data-value="#6BA54A" title="#6BA54A"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#4A7B8C"
                                                                    data-value="#4A7B8C" title="#4A7B8C"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#3984C6"
                                                                    data-value="#3984C6" title="#3984C6"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#634AA5"
                                                                    data-value="#634AA5" title="#634AA5"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#A54A7B"
                                                                    data-value="#A54A7B" title="#A54A7B"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#9C0000"
                                                                    data-value="#9C0000" title="#9C0000"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#B56308"
                                                                    data-value="#B56308" title="#B56308"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#BD9400"
                                                                    data-value="#BD9400" title="#BD9400"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#397B21"
                                                                    data-value="#397B21" title="#397B21"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#104A5A"
                                                                    data-value="#104A5A" title="#104A5A"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#085294"
                                                                    data-value="#085294" title="#085294"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#311873"
                                                                    data-value="#311873" title="#311873"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#731842"
                                                                    data-value="#731842" title="#731842"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#630000"
                                                                    data-value="#630000" title="#630000"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#7B3900"
                                                                    data-value="#7B3900" title="#7B3900"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#846300"
                                                                    data-value="#846300" title="#846300"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#295218"
                                                                    data-value="#295218" title="#295218"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#083139"
                                                                    data-value="#083139" title="#083139"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#003163"
                                                                    data-value="#003163" title="#003163"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#21104A"
                                                                    data-value="#21104A" title="#21104A"></button>
                                                            <button type="button" class="btn-color"
                                                                    style="background-color:#4A1031"
                                                                    data-value="#4A1031" title="#4A1031"></button>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="txt-tools-show">
                                    <div class="txtarea-box">
                                        <label>Font Size <span class="size pull-right"
                                                               id="font_counter">14 px</span></label>
                                        <input type="range" min="10" max="72" onchange="rangecontrol(this)">
                                    </div>
                                </div>
                                <div class="txt-tools-show" style="
    display: none;
">
                                    <div class="txtarea-box">
                                        <label>Character Spacing <span class="size pull-right">0 px</span></label>
                                        <input type="range" min="0" max="20" onchange="characherspecing(this)">
                                    </div>
                                </div>
                                <div class="txt-tools-show border-none" style="
    display: none;
">
                                    <div class="txtarea-box">
                                        <label>Line Spacing <span class="size pull-right">26 px</span></label>
                                        <input type="range" min="10" max="72" onchange="linespecing(this)">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="txt-tools-container style-scroll" id="tool_socialmedia" style="">
                            <div class="tool-social-box">
                                <div class="ed_socialblock">
                                    <div class="col-xs-12 form-group">

                                        <select class="form-control selectoption" onchange="social_selection(this);"
                                                disabled="disabled">
                                            <option value="facebook">Facebook</option>
                                            <option value="twitter">Twitter</option>
                                            <option value="linkedin" selected="selected">Linkedin</option>
                                            <option value="googleplus">Google plus</option>
                                            <option value="pinterest">Pinterest</option>
                                            <option value="instagram">Instagram</option>
                                            <option value="youtube">YouTube</option>
                                            <option value="tumblr">Tumblr</option>
                                            <option value="reddit">Reddit</option>
                                            <option value="website">Website</option>
                                        </select>

                                    </div>
                                    <div class="social-tool-row">
                                        <div class="social-tool-icon">
                                            <img src="http://saisunjobs.com/webresume/images/Editor/linkedin.png">
                                        </div>
                                        <input type="text" class="form-control" placeholder="Enter page URL here">
                                        <span data-whichremove="linkedin" data-toggle="tooltip" title="Delete"
                                              onclick="RemoveLink(this,'default');"><i class="mdi mdi-delete"
                                                                                       aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                <div class="ed_socialblock">
                                    <div class="col-xs-12 form-group">

                                        <select class="form-control selectoption" onchange="social_selection(this);"
                                                disabled="disabled">
                                            <option value="facebook" selected="selected">Facebook</option>
                                            <option value="twitter">Twitter</option>
                                            <option value="linkedin">Linkedin</option>
                                            <option value="googleplus">Google plus</option>
                                            <option value="pinterest">Pinterest</option>
                                            <option value="instagram">Instagram</option>
                                            <option value="youtube">YouTube</option>
                                            <option value="tumblr">Tumblr</option>
                                            <option value="reddit">Reddit</option>
                                            <option value="website">Website</option>
                                        </select>

                                    </div>
                                    <div class="social-tool-row">
                                        <div class="social-tool-icon">
                                            <img src="http://saisunjobs.com/webresume/images/Editor/facebook.png">
                                        </div>
                                        <input type="text" class="form-control" placeholder="Enter page URL here">
                                        <span data-whichremove="facebook" data-toggle="tooltip" title="Delete"
                                              onclick="RemoveLink(this,'default');"><i class="mdi mdi-delete"
                                                                                       aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                <div class="ed_socialblock">
                                    <div class="col-xs-12 form-group">
                                        <select class="form-control selectoption" onchange="social_selection(this);"
                                                disabled="disabled">
                                            <option value="facebook">Facebook</option>
                                            <option value="twitter" selected="selected">Twitter</option>
                                            <option value="linkedin">Linkedin</option>
                                            <option value="googleplus">Google plus</option>
                                            <option value="pinterest">Pinterest</option>
                                            <option value="instagram">Instagram</option>
                                            <option value="youtube">YouTube</option>
                                            <option value="tumblr">Tumblr</option>
                                            <option value="reddit">Reddit</option>
                                            <option value="website">Website</option>
                                        </select>

                                    </div>
                                    <div class="social-tool-row">
                                        <div class="social-tool-icon">
                                            <img src="http://saisunjobs.com/webresume/images/Editor/twitter.png">
                                        </div>
                                        <input type="text" class="form-control" placeholder="Enter page URL here">
                                        <span data-whichremove="twitter" data-toggle="tooltip" title="Delete"
                                              onclick="RemoveLink(this,'default');"><i class="mdi mdi-delete"
                                                                                       aria-hidden="true"></i></span>
                                    </div>
                                </div>

                                <div class="ed_socialblock" style="display: none;">
                                    <div class="col-xs-12 form-group">
                                        <select class="form-control selectoption" onchange="social_selection(this);"
                                                disabled="disabled">
                                            <option value="facebook">Facebook</option>
                                            <option value="twitter">Twitter</option>
                                            <option value="linkedin">Linkedin</option>
                                            <option value="googleplus" selected="selected">Google plus</option>
                                            <option value="pinterest">Pinterest</option>
                                            <option value="instagram">Instagram</option>
                                            <option value="youtube">YouTube</option>
                                            <option value="tumblr">Tumblr</option>
                                            <option value="reddit">Reddit</option>
                                            <option value="website">Website</option>
                                        </select>
                                    </div>
                                    <div class="social-tool-row">
                                        <div class="social-tool-icon">
                                            <img src="http://saisunjobs.com/webresume/images/Editor/googleplus.png">
                                        </div>
                                        <input type="text" class="form-control" placeholder="Enter page URL here">
                                        <span data-whichremove="googleplus" onclick="RemoveLink(this,'default');"><i
                                                    class="mdi mdi-delete" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 twobutton" id="tool_socialmedia_savebtns"
                             style="text-align: center; margin-bottom: 20px;">
                            <button type="button" id="addmore_social" class="btn btn-success waves-effect waves-light"
                                    style="margin-right: 5px;">Add More
                            </button>
                            {{--<button type="button" onclick="SaveSocialurl();"--}}
                            <button type="button" onclick="PreviewResume_edit();"
                                    class="btn btn-primary waves-effect waves-light">Save &amp; Preview
                            </button>
                        </div>
                        <div class="editor-footer twobutton" id="editor_buttonbox" style="display: none;">
                            <button type="button" onclick="removeselection()"
                                    class="btn btn-success waves-effect waves-light" style="margin-right: 5px;">Remove
                                Selection
                            </button>
                            <button type="button" onclick="PreviewResume();"
                                    class="btn btn-primary waves-effect waves-light">Preview
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-9">
                    <div class="blank_resumebox card" id="blank_resumebox">
                        <div class="card-body resume_html" id="resume_html">
                            <div style="font-family:Calisto MT;width: 100%;background-color: #ffffff;text-align: center;margin: 0px auto;position: relative;" class="email_innerbody" id="resume_body">
                            {!! $user_resume->template_html !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection