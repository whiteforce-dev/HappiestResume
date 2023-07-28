@extends('frontend.master.front_master')
@section('title', 'Edit Resume')
@section('content')
    <link rel="stylesheet" href="{{url('public/front').'/'}}css/editor/editor-tools.css" type="text/css"/>
    <link href="{{url('public/front').'/'}}css/media.css" rel="stylesheet" type="text/css"/>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
    <script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
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
                            <button type="button" onclick="SaveSocialurl();"
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
                            <form class="form" style="max-width: none; width: 1005px;">
                                <div style="font-family:Calisto MT;width: 100%;background-color: #ffffff;text-align: center;margin: 0px auto;position: relative;"
                                     class="email_innerbody" id="resume_body">
                                    <table style="width: 100%;text-align: left;display: inline-block;table-layout: fixed;">
                                        <tbody>
                                        <tr style="height: 15px;margin-bottom: 20px;width: 100%;">
                                            <td class="top-color" style="background: #f8e71c;width: 20%;"
                                                colspan="1"></td>
                                            <td class="top-color" style="background: #4285f4;width: 20%;"
                                                colspan="1"></td>
                                            <td class="top-color" style=" background: #ff8800;width: 20%;"
                                                colspan="1"></td>
                                            <td class="top-color" style="background: #4285f4;width: 20%;"
                                                colspan="1"></td>
                                            <td class="top-color" style="background: #f8e71c;width: 20%;"
                                                colspan="1"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="photo" style="width: 150px;">
                                                <div style="width: 100%;position: relative;max-width: 125px;">

                                                    @if(isset(session('user')['image']))
                                                        <img class="global_img" id="profile_pic"
                                                             src="{{url(session('user')['image'])}}"
                                                             alt="image"
                                                             title="{{url(session('user')['image'])}}"
                                                             style="border: solid 5px #249991;border-radius: 50%;padding: 5px;margin-top: 10px;width: 125px;height: 125px;"/>

                                                    @elseif(isset(session('user')->image))
                                                        <img class="global_img" id="profile_pic"
                                                             src="{{url(session('user')->image)}}"
                                                             alt="image"
                                                             style="border: solid 5px #249991;border-radius: 50%;padding: 5px;margin-top: 10px;width: 125px;height: 125px;"/>
                                                    @else
                                                        <img class="global_img" id="profile_pic"
                                                             src="{{url('front/images/default-pic.png')}}"
                                                             alt="image"
                                                             style="border: solid 5px #249991;border-radius: 50%;padding: 5px;margin-top: 10px;width: 125px;height: 125px;"/>
                                                    @endif

                                                    {{--@if(file_exists(session('user')->image))--}}
                                                    {{--@if(session()->has('user'))--}}
                                                    {{--<img class="global_img" id="profile_pic"--}}
                                                    {{--src="{{url(session('user')->image)}}"--}}
                                                    {{--alt="image"--}}
                                                    {{--style="border: solid 5px #249991;border-radius: 50%;padding: 5px;margin-top: 10px;width: 125px;height: 125px;">--}}
                                                    {{--@elseif(file_exists(session('user')['image']))--}}
                                                    {{--<img class="global_img" id="profile_pic"--}}
                                                    {{--src="{{url(session('user')['image'])}}"--}}
                                                    {{--alt="image"--}}
                                                    {{--style="border: solid 5px #249991;border-radius: 50%;padding: 5px;margin-top: 10px;width: 125px;height: 125px;">--}}
                                                    {{--@else--}}
                                                    {{--<img class="global_img" id="profile_pic"--}}
                                                    {{--src="{{url('public/front').'/'}}images/default-pic.png"--}}
                                                    {{--alt="image"--}}
                                                    {{--style="border: solid 5px #249991;border-radius: 50%;padding: 5px;margin-top: 10px;width: 125px;height: 125px;">--}}
                                                    {{--@endif--}}
                                                    <input class="file_upload" type="file"
                                                           onchange="ChangeSetImage(this)">
                                                </div>
                                                {{--                                            {{dd($resume)}}--}}
                                                {{----}}
                                                {{--<div style="width: 100%;position: relative;max-width: 125px;">--}}
                                                {{--<img class="global_img" id="profile_pic"--}}
                                                {{--src="{{url('public/front').'/'}}images/default-pic.png"--}}
                                                {{--alt="image"--}}
                                                {{--style="border: solid 5px #249991;border-radius: 50%;padding: 5px;margin-top: 10px;width: 125px;height: 125px;">--}}
                                                {{--<input class="file_upload" type="file" onchange="ChangeSetImage(this)">--}}
                                                {{--</div>--}}
                                            </td>
                                            <td colspan="3">
                                                <div class="pencil_hoverthis">
                                                    <h2>
                                                        {{--@if(session()->has('user'))--}}
                                                        {{--{{isset(session('user')['name'])?session('user')['name']:session('user')->name}}--}}
                                                        {{--@endif--}}
                                                        @if(isset(session('user')['name']))
                                                            <div style="color: #3b658a;outline: none"
                                                                 contentEditable=true
                                                                 data-text="{{session('user')['name']}}">{{session('user')['name']}}</div>
                                                        @else
                                                            <div style="color: #3b658a;outline: none"
                                                                 contentEditable=true
                                                                 data-text="{{session('user')->name}}">{{session('user')->name}}</div>
                                                            {{--<div style="color: #3b658a;outline: none" contentEditable=true--}}
                                                            {{--data-text="Enter Your Name"></div>--}}
                                                        @endif
                                                    </h2>
                                                </div>
                                                <div class="pencil_hoverthis">
                                                    <h6 class="editable"
                                                        style="position: relative;margin-top: 0px;outline: none;"
                                                        spellcheck="false">
                                                        <b>
                                                            <div contentEditable=true data-text="Enter Your Designation"
                                                                 style="outline: none;"></div>
                                                        </b></h6>
                                                </div>
                                            </td>
                                            <td colspan="1"></td>
                                            <!--                                        <td colspan="1" style="text-align: right;"><b class="bold"-->
                                            <!--                                                                                      style="width: 100%;display: inline-block;">Email-->
                                            <!--                                            : </b>-->
                                            <!--                                            <b class="bold">Mobile : </b>-->
                                            <!--                                        </td>-->
                                            <!--                                        <td colspan="1" style="padding-left: 15px;">-->
                                        <!--                                            <span contenteditable="true" style="width: 100%;display: inline-block;">pinkukesharwani89@gmail.com</span>-->
                                            <!--                                            <span contenteditable="true" style="width: 100%;display: inline-block;">6263626505</span>-->
                                            <!--                                        </td>-->
                                        </tr>
                                        <tr>
                                            <td colspan="5">
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr onclick="selectedrow(this);" class="selectedrow">
                                            <td colspan="5">
                                                <div class="pencil_hoverthis" contenteditable="true" unselectable="on"
                                                     style="padding: 15px;background: #f5f5f5;display: inline-block;position: relative;z-index: 5;outline: none;margin-bottom: 15px;width: 100%;">
                                                <span class="number_bullet_container">
                                                <p style="font-size: 14px;margin: 0px">I am a highly competent IT professional with a proven track record in designing websites, networking and managing databases. I have strong technical skills as well as excellent interpersonal skills, enabling me to interact with a wide range of clients.</p>
                                                </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">
                                                <h3 style="font-family: Calibri;text-transform: uppercase;color: #2a5479;font-weight: 700;font-size: 30px;margin: 15px 0px 25px 0px;">
                                                    Profile</h3>
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td colspan="5">
                                                <div contenteditable="true" class="pencil_hoverthis" unselectable="on"
                                                     style="padding: 15px;background: #f5f5f5;position: relative;z-index: 5;outline: none;">
                                                    <h5 style="font-family: Calibri;font-size: 22px;font-weight: bold;padding-bottom: 3px;border-bottom: solid thin #cccccc;margin-bottom: 5px;"
                                                        contenteditable="false"><font color="#3b658a">WhatsApp/Contact
                                                            No.</font></h5>
                                                    <p>
                                                        {{isset(session('user')->contact)?session('user')->contact:'Enter your contact no.'}}
                                                    </p>
                                                    <h5 contenteditable="false"
                                                        style="font-family: Calibri;font-size: 22px;font-weight: bold;padding-bottom: 3px;border-bottom: solid thin #cccccc;margin-bottom: 5px;">
                                                        <font color="#3b658a">Email Id</font></h5>
                                                    <p>
                                                        @if(session()->has('user'))
                                                            {{isset(session('user')['username'])?session('user')['username']:session('user')->username}}
                                                        @endif
                                                        {{--Enter your email id--}}
                                                    </p>
                                                    <h5 contenteditable="false"
                                                        style="font-family: Calibri;font-size: 22px;font-weight: bold;padding-bottom: 3px;border-bottom: solid thin #cccccc;">
                                                        <font color="#3b658a">Find Me On</font></h5>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">
                                                <div style="background: #f5f5f5;margin-top:-5px;margin-bottom: 20px;">
                                                    <ul class="ul-social-media" id="icon_social"
                                                        onclick="OpenSocialtab();">
                                                        <li data-whichone="linkedin"
                                                            style="display:inline-block;list-style:none;"><a
                                                                    href="javascript:void();"><img
                                                                        src="http://saisunjobs.com/webresume/images/editor/linkedin.png"
                                                                        style="width:35px"></a></li>
                                                        <li data-whichone="facebook"
                                                            style="display:inline-block;list-style:none;"><a
                                                                    href="javascript:void();"><img
                                                                        src="http://saisunjobs.com/webresume/images/editor/facebook.png"
                                                                        style="width:35px"></a></li>
                                                        <li data-whichone="twitter"
                                                            style="display:inline-block;list-style:none;"><a
                                                                    href="javascript:void();"><img
                                                                        src="http://saisunjobs.com/webresume/images/editor/twitter.png"
                                                                        style="width:35px"></a></li>

                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr onclick="selectedrow(this);" class="">
                                            <td colspan="5">
                                                <h3 style="font-family: Calibri;text-transform: uppercase;color: #2a5479;font-weight: 700;font-size: 30px;margin: 15px 0px 10px 0px;">
                                                    Education </h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">
                                                <ul class="timeline"
                                                    style="display: inline-block;width: 90%;list-style: none;padding: 0px;margin: 20px 0px 0px 5%;">
                                                    <li onclick="selectedrow_timeline(this);"
                                                        class="selectedrow_timeline">
                                                        <div style="display: inline-block;position: relative;width: 100%;">
                                                            <div style="width: 15%;float: left;z-index: 10;text-align: center;position: relative;">
                                                            <span class="circle blue darken-2 z-depth-1-half" style="
                                                            color: #ffffff;
                                                            border-radius: 50%;
                                                            z-index: 10;
                                                            width: 50px;
                                                            height: 50px;
                                                            display: inline-block;
                                                            line-height: 50px;
                                                            font-size: 28px;
                                                            background: #1a7fd0 !important;
                                                            ">
                                                                <i class="mdi mdi-tie" aria-hidden="true" style="
"></i></span>
                                                            </div>
                                                            <div class="editable_container pencil_hoverthis"
                                                                 contenteditable="true" unselectable="on"
                                                                 style="margin-bottom: 20px;width: 80%;float: left;box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important;outline: none;">
                                                                <h3 style="font-family: corbel;color: rgb(255, 255, 255);padding: 10px;background: rgb(255, 136, 0);font-size: 24px;">
                                                                    Enter your school name -2004</h3>
                                                                <p style="padding: 15px;color: #666666;"> Х’th from
                                                                    Hitkarini Higher Sec.
                                                                    School Jabalpur in 2004 from MP Board.</p>
                                                            </div>
                                                            <div style="position: absolute;width: 2px;z-index: 1;left: 7.5%;height: 100%;background: #1a7fd0;top: 20px;-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .18), 0 4px 15px 0 rgba(0, 0, 0, .15);box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .18), 0 4px 15px 0 rgba(0, 0, 0, .15);"></div>
                                                        </div>
                                                    </li>
                                                    <li onclick="selectedrow_timeline(this);" class="">
                                                        <div style="display: inline-block;position: relative;width: 100%;">
                                                            <div style="width: 15%;float: left;z-index: 10;text-align: center;position: relative;">
                                                            <span class="circle blue darken-2 z-depth-1-half" style="
                                                            color: #ffffff;
                                                            border-radius: 50%;
                                                            z-index: 10;
                                                            width: 50px;
                                                            height: 50px;
                                                            display: inline-block;
                                                            line-height: 50px;
                                                            font-size: 28px;
                                                            background: #1a7fd0 !important;
                                                            ">
                                                                <i class="mdi mdi-tie" aria-hidden="true" style="
"></i></span>
                                                            </div>
                                                            <div class="editable_container pencil_hoverthis"
                                                                 contenteditable="true" unselectable="on"
                                                                 style="margin-bottom: 20px;width: 80%;float: left;box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important;outline: none;">
                                                                <h3 style="font-family: corbel;padding: 10px;font-size: 24px;margin: 0px;color: #ffffff;background: #ff8800;/* background: #666666; */">
                                                                    <span style="">Enter your school name</span><span
                                                                            style="">&nbsp;</span>-2006</h3>
                                                                <p style="padding: 15px;color: #666666;"><span
                                                                            style="color: rgb(33, 37, 41); font-size: 14.4px;">XII’th from Hitkarini Higher Sec. School Jabalpur in 2006 from MP Board.</span><br>
                                                                </p>
                                                            </div>
                                                            <div style="position: absolute;width: 2px;z-index: 1;left: 7.5%;height: 100%;background: #1a7fd0;top: 20px;-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .18), 0 4px 15px 0 rgba(0, 0, 0, .15);box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .18), 0 4px 15px 0 rgba(0, 0, 0, .15);"></div>
                                                        </div>
                                                    </li>
                                                    <li onclick="selectedrow_timeline(this);" class="">
                                                        <div style="display: inline-block;position: relative;width: 100%;">
                                                            <div style="width: 15%;float: left;z-index: 10;text-align: center;position: relative;">
                                                            <span class="circle blue darken-2 z-depth-1-half" style="
                                                            color: #ffffff;
                                                            border-radius: 50%;
                                                            z-index: 10;
                                                            width: 50px;
                                                            height: 50px;
                                                            display: inline-block;
                                                            line-height: 50px;
                                                            font-size: 28px;
                                                            background: #1a7fd0 !important;
                                                            ">
<!--                                                                <i class="mdi mdi-certificate" aria-hidden="true"-->
                                                                <!--                                                                   style=""></i>-->
                                                                <img src="{{url('public/front').'/'}}images/degree-education.png"
                                                                     style="width: 40px;">
                                                            </span>
                                                            </div>
                                                            <div class="editable_container pencil_hoverthis"
                                                                 contenteditable="true" unselectable="on"
                                                                 style="margin-bottom: 20px;width: 80%;float: left;box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important;outline: none;">
                                                                <h3 style="font-family: corbel;padding: 10px;margin: 0px;color: #ffffff;background: #ff8800;/* background: #666666; */font-size: 24px;">
                                                                    Enter your collage name -2009</h3>
                                                                <p style="padding: 15px;color: #666666;"><b
                                                                            style="margin: 0px 0px 5px 0px;display: inline-block;width: 100%;"><a
                                                                                href="http://google.com">www.entercollagewebsite.com</a></b><span
                                                                            style="font-size: 14.4px; color: rgb(33, 37, 41);">BCA from CCSE. College Jabalpur in 2009 from MCRPV.</span>
                                                                </p>
                                                            </div>
                                                            <div style="position: absolute;width: 2px;z-index: 1;left: 7.5%;height: 100%;background: #1a7fd0;top: 20px;-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .18), 0 4px 15px 0 rgba(0, 0, 0, .15);box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .18), 0 4px 15px 0 rgba(0, 0, 0, .15);"></div>
                                                        </div>
                                                    </li>
                                                    <li class="">
                                                        <div style="display: inline-block;position: relative;width: 100%;">
                                                            <div style="width: 15%;float: left;z-index: 10;text-align: center;position: relative;">
                                                            <span class="circle blue darken-2 z-depth-1-half" style="
                                                            color: #ffffff;
                                                            border-radius: 50%;
                                                            z-index: 10;
                                                            width: 50px;
                                                            height: 50px;
                                                            display: inline-block;
                                                            line-height: 50px;
                                                            font-size: 28px;
                                                            background: #1a7fd0 !important;
                                                            ">
                                                                <i class="mdi mdi-school" aria-hidden="true"></i></span>
                                                            </div>
                                                            <div class="editable_container pencil_hoverthis"
                                                                 contenteditable="true" unselectable="on"
                                                                 style="margin-bottom: 5px;width: 80%;float: left;box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important;outline: none;">
                                                                <h3 style="font-family: corbel;padding: 10px;margin: 0px;color: #ffffff;background: #ff8800;/* background: #666666; */font-size: 24px;">
                                                                    Enter your post graduation collage name-2013</h3>
                                                                <p style="padding: 15px;color: #666666;"><b
                                                                            style="margin: 0px 0px 5px 0px;display: inline-block;width: 100%;"><a
                                                                                href="http://">www.entercollagewebsite.com</a></b>&nbsp;MCA<span
                                                                            style="color: rgb(33, 37, 41); font-size: 14.4px;">&nbsp;from Gyan Ganga Collage of Technology Jabalpur in 2013 from MP Board.</span><br>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr onclick="selectedrow(this);" class="">
                                            <td colspan="5">
                                                <h3 style="font-family: Calibri;text-transform: uppercase;color: #2a5479;font-weight: 700;font-size: 30px;margin: 25px 0px;">
                                                    Achievement </h3>
                                            </td>
                                        </tr>
                                        <tr onclick="selectedrow(this);" class="">
                                            <td colspan="1">
                                                <div style="width: 100%;position: relative;max-width: 150px;display: inline-block">
                                                    <img class="global_img"
                                                         src="{{url('public/front').'/'}}images/add-achiveiment.jpg"
                                                         style="width: 150px;float:left;margin-bottom: 15px;"
                                                         align="left">
                                                    <input class="file_upload" type="file"
                                                           onchange="ChangeSetImage(this)">
                                                </div>
                                            </td>
                                            <td valign="top" colspan="4">
                                                <div class="pencil_hoverthis" contenteditable="true" unselectable="on"
                                                     style="background-color:#f5f5f5;font-family: Calibri;padding: 15px;position: relative;outline: none;">
                                                    <h3 style="
    margin-bottom: 5px;
"> Give the achievement title</h3>
                                                    <span class="number_bullet_container">
                                                <p style="
    margin: 0px;
">Your educational achievements should include any academic awards
                                                    received at graduation, awards from or participation in any clubs or
                                                    organizations, leadership positions or scholarly works related to
                                                    your major or the job for which you are applying.</p>
                                                </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr onclick="selectedrow(this);" class="">
                                            <td colspan="5">
                                                <h3 style="font-family: Calibri;text-transform: uppercase;color: #2a5479;font-weight: 700;font-size: 30px;margin: 15px 0px 25px 0px;">
                                                    Work Experience</h3>
                                            </td>
                                        </tr>
                                        <tr onclick="selectedrow(this);" class="">
                                            <td colspan="5">
                                                <div class="pencil_hoverthis" contenteditable="true" unselectable="on"
                                                     style="padding: 15px;background: #f5f5f5;display: inline-block;position: relative;z-index: 5;outline: none;margin-bottom: 15px;width: 100%;">
                                                    <h5 style="font-family: Calibri;font-size: 26px;font-weight: bold;border-bottom: solid thin #cccccc;padding-bottom: 5px;">
                                                        Enter your company name</h5> <b
                                                            style="display: inline-block;width: 100%;margin: 8px 0px 3px 0px;"><a
                                                                href="http://">www.companywebsite.com</a></b>
                                                    <b style="display: inline-block;padding-bottom: 5px;">Sr. Web
                                                        Designer - June 2019 - Current</b>
                                                    <span class="number_bullet_container">
                                                <p style="margin: 0px;">Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text
                                                    ever since the 1500s, when an unknown printer took a galley of type
                                                    and scrambled it to make a type specimen book.</p>
                                                </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">
                                                <h3 style="font-family: Calibri;text-transform: uppercase;color: #2a5479;font-weight: 700;font-size: 30px;margin: 15px 0px 25px 0px;">
                                                    Key Skills</h3>
                                            </td>
                                        </tr>
                                        <tr onclick="selectedrow(this);" class="">
                                            <td colspan="5">
                                                <div class="pencil_hoverthis" contenteditable="true" unselectable="on"
                                                     style="padding: 15px;background: #f5f5f5;display: inline-block;position: relative;z-index: 5;outline: none;margin-bottom: 15px;width: 100%;">
                                                    <h5 style="font-family: Calibri;font-size: 26px;margin-bottom: 8px; font-weight: bold;padding-bottom: 10px;border-bottom: solid thin #cccccc;">
                                                        Skills</h5>
                                                    <span class="number_bullet_container">
                                                <p style="margin:0px;">Open-Mindedness, Empathy, Respect, Listening, Delegating, Positivity, Public Speaking, Teamwork, Time Management.</p>
                                                </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">
                                                <h3 style="font-family: Calibri;text-transform: uppercase;color: #2a5479;font-weight: 700;font-size: 30px;margin: 15px 0px 25px 0px;">
                                                    Personal Details</h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">
                                                <table class="personal_table"
                                                       style="width: 100%;position: relative;border: solid thin #e1e1e1;outline: none;">
                                                    <tbody>
                                                    <tr onclick="personal_rowclick(this);">
                                                        <td style="font-family: Calibri;width: 30%;padding:10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                            Current Location
                                                        </td>
                                                        <td contenteditable="true" unselectable="on"
                                                            class="edit_perblock"
                                                            style="border-bottom: solid thin #e1e1e1;padding: 10px 15px;outline: none;">
                                                        </td>
                                                        <td style="
    border-bottom: solid thin #e1e1e1;
    padding: 5px 10px 0px 0px;
    width: 40px;
    text-align: right;
">
                                                            <button type="button" contenteditable="false"
                                                                    unselectable="on"
                                                                    class="btn-changeimg btn btn-danger per_delete waves-effect waves-light"
                                                                    onclick="removeblock_per(this);"
                                                                    title="Remove block"><i
                                                                        class="mdi mdi-delete"> </i></button>
                                                        </td>
                                                    </tr>
                                                    <tr onclick="personal_rowclick(this);">
                                                        <td style="font-family: Calibri;width: 30%;padding:10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                            Current CTC (LPA)
                                                        </td>
                                                        <td contenteditable="true" unselectable="on"
                                                            class="edit_perblock"
                                                            style="border-bottom: solid thin #e1e1e1;padding: 10px 15px;outline: none;">
                                                        </td>
                                                        <td style="border-bottom: solid thin #e1e1e1;padding: 5px 10px 0px 0px;width: 40px;text-align: right;">
                                                            <button type="button" contenteditable="false"
                                                                    unselectable="on"
                                                                    class="btn-changeimg btn btn-danger per_delete waves-effect waves-light"
                                                                    onclick="removeblock_per(this);"
                                                                    title="Remove block"><i
                                                                        class="mdi mdi-delete"> </i></button>
                                                        </td>
                                                    </tr>
                                                    <tr onclick="personal_rowclick(this);">
                                                        <td style="font-family: Calibri;width: 30%;padding: 10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                            Total Experience
                                                        </td>
                                                        <td contenteditable="true" unselectable="on"
                                                            class="edit_perblock"
                                                            style="border-bottom: solid thin #e1e1e1;padding: 10px 15px;outline: none;">
                                                        </td>
                                                        <td style="
    border-bottom: solid thin #e1e1e1;
    padding: 5px 10px 0px 0px;
    width: 40px;
    text-align: right;
">
                                                            <button type="button" contenteditable="false"
                                                                    unselectable="on"
                                                                    class="btn-changeimg btn btn-danger per_delete waves-effect waves-light"
                                                                    onclick="removeblock_per(this);"
                                                                    title="Remove block"><i
                                                                        class="mdi mdi-delete"> </i></button>
                                                        </td>
                                                    </tr>
                                                    <tr onclick="personal_rowclick(this);">
                                                        <td style="font-family: Calibri;width: 30%;padding: 10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                            Notice Period
                                                        </td>
                                                        <td contenteditable="true" unselectable="on"
                                                            class="edit_perblock"
                                                            style="border-bottom: solid thin #e1e1e1;padding: 10px 15px;outline: none;">
                                                        </td>
                                                        <td style="
    border-bottom: solid thin #e1e1e1;
    padding: 5px 10px 0px 0px;
    width: 40px;
    text-align: right;
">
                                                            <button type="button" contenteditable="false"
                                                                    unselectable="on"
                                                                    class="btn-changeimg btn btn-danger per_delete waves-effect waves-light"
                                                                    onclick="removeblock_per(this);"
                                                                    title="Remove block"><i
                                                                        class="mdi mdi-delete"> </i></button>
                                                        </td>
                                                    </tr>
                                                    <tr onclick="personal_rowclick(this);" class="">
                                                        <td style="font-family: Calibri;width: 30%;padding: 10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                            Willing to Relocate
                                                        </td>
                                                        <td contenteditable="true" unselectable="on"
                                                            class="edit_perblock"
                                                            style="border-bottom: solid thin #e1e1e1;padding: 10px 15px;outline: none;">
                                                        </td>
                                                        <td style="
    border-bottom: solid thin #e1e1e1;
    padding: 5px 10px 0px 0px;
    width: 40px;
    text-align: right;
">
                                                            <button type="button" contenteditable="false"
                                                                    unselectable="on"
                                                                    class="btn-changeimg btn btn-danger per_delete waves-effect waves-light"
                                                                    onclick="removeblock_per(this);"
                                                                    title="Remove block"><i
                                                                        class="mdi mdi-delete"> </i></button>
                                                        </td>
                                                    </tr>
                                                    <tr onclick="personal_rowclick(this);" class="">
                                                        <td style="font-family: Calibri;width: 30%;padding: 10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                            Age
                                                        </td>
                                                        <td contenteditable="true" unselectable="on"
                                                            class="edit_perblock"
                                                            style="border-bottom: solid thin #e1e1e1;padding: 10px 15px;outline: none;">
                                                        </td>
                                                        <td style="
    border-bottom: solid thin #e1e1e1;
    padding: 5px 10px 0px 0px;
    width: 40px;
    text-align: right;
">
                                                            <button type="button" contenteditable="false"
                                                                    unselectable="on"
                                                                    class="btn-changeimg btn btn-danger per_delete waves-effect waves-light"
                                                                    onclick="removeblock_per(this);"
                                                                    title="Remove block"><i
                                                                        class="mdi mdi-delete"> </i></button>
                                                        </td>
                                                    </tr>
                                                    <tr onclick="personal_rowclick(this);">
                                                        <td style="font-family: Calibri;width: 30%;padding: 10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                            Language
                                                        </td>
                                                        <td contenteditable="true" unselectable="on"
                                                            class="edit_perblock"
                                                            style="border-bottom: solid thin #e1e1e1;padding: 10px 15px;outline: none;">
                                                        </td>
                                                        <td style="
    border-bottom: solid thin #e1e1e1;
    padding: 5px 10px 0px 0px;
    width: 40px;
    text-align: right;
">
                                                            <button type="button" contenteditable="false"
                                                                    unselectable="on"
                                                                    class="btn-changeimg btn btn-danger per_delete waves-effect waves-light"
                                                                    onclick="removeblock_per(this);"
                                                                    title="Remove block"><i
                                                                        class="mdi mdi-delete"> </i></button>
                                                        </td>
                                                    </tr>
                                                    <tr onclick="personal_rowclick(this);">
                                                        <td style="font-family: Calibri;width: 30%;padding: 10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                            Gender
                                                        </td>
                                                        <td contenteditable="true" unselectable="on"
                                                            class="edit_perblock"
                                                            style="border-bottom: solid thin #e1e1e1;padding: 10px 15px;outline: none">
                                                        </td>
                                                        <td style="border-bottom: solid thin #e1e1e1;padding: 5px 10px 0px 0px;width: 40px;
    text-align: right;
">
                                                            <button type="button" contenteditable="false"
                                                                    unselectable="on"
                                                                    class="btn-changeimg btn btn-danger per_delete waves-effect waves-light"
                                                                    onclick="removeblock_per(this);"
                                                                    title="Remove block"><i
                                                                        class="mdi mdi-delete"> </i></button>
                                                        </td>
                                                    </tr>
                                                    <tr onclick="personal_rowclick(this);">
                                                        <td style="font-family: Calibri;width: 30%;padding: 10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                            Married Status
                                                        </td>
                                                        <td contenteditable="true" unselectable="on"
                                                            class="edit_perblock"
                                                            style="border-bottom: solid thin #e1e1e1;padding: 10px 15px;outline: none;">
                                                        </td>
                                                        <td style="
    border-bottom: solid thin #e1e1e1;
    padding: 5px 10px 0px 0px;
    width: 40px;
    text-align: right;
">
                                                            <button type="button" contenteditable="false"
                                                                    unselectable="on"
                                                                    class="btn-changeimg btn btn-danger per_delete waves-effect waves-light"
                                                                    onclick="removeblock_per(this);"
                                                                    title="Remove block"><i
                                                                        class="mdi mdi-delete"> </i></button>
                                                        </td>
                                                    </tr>
                                                    <tr onclick="personal_rowclick(this);" class="">
                                                        <td style="font-family: Calibri;width: 30%;padding: 10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                            Hobby / Interest
                                                        </td>
                                                        <td contenteditable="true" unselectable="on"
                                                            class="edit_perblock"
                                                            style="border-bottom: solid thin #e1e1e1;padding: 10px 15px;outline: none;">
                                                        </td>
                                                        <td style="border-bottom: solid thin #e1e1e1;padding: 5px 10px 0px 0px;width: 40px;text-align: right;">
                                                            <button type="button" contenteditable="false"
                                                                    unselectable="on"
                                                                    class="btn-changeimg btn btn-danger per_delete waves-effect waves-light"
                                                                    onclick="removeblock_per(this);"
                                                                    title="Remove block"><i
                                                                        class="mdi mdi-delete"> </i></button>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr class="desclaration_div">
                                            <td colspan="5">
                                                <h3 style="font-family: Calibri;text-transform: uppercase;color: #2a5479;font-weight: 700;font-size: 30px;margin: 20px 0px;">
                                                    Declaration</h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">
                                                <div class="pencil_hoverthis" contenteditable="true" unselectable="on"
                                                     style="padding: 10px 15px;background: #f5f5f5;display: inline-block;position: relative;z-index: 5;outline: none;width: 100%;margin-bottom: 10px;">
                                                    <div class="form-check" style="padding: 0px;">
                                                        <input type="checkbox"
                                                               class="form-check-input desclaration_checkbox"
                                                               id="materialUnchecked">
                                                        <label class="form-check-label decleartion_checkbox"
                                                               for="materialUnchecked" style="float: left;"></label>
                                                        <p style="margin: 0px;display: inline-block;margin-top: 0px;float: left;">
                                                            I hereby declare that the above information is true to best
                                                            of
                                                            my
                                                            knowledge.</p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="text-align: left;max-width: 100px !important;"><b
                                                        class="bold"
                                                        style="font-family: Calibri;display: inline-block;margin-right: 10px;">Date
                                                    :</b>
                                                <div style="/* width: 100%; */display: inline-block;outline: none;"
                                                     contenteditable="true">12-08-2019
                                                </div>
                                            </td>
                                            <td colspan="3" style="padding-left: 15px;">
                                                <b class="bold"
                                                   style="font-family: Calibri;display: inline-block;margin-right: 10px;">Place
                                                    : </b>
                                                <div contenteditable="true"
                                                     style="display: inline-block;outline: none;">
                                                    Jabalpur
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">
                                                <h5 style="text-align: center;margin-top: 10px;padding-top: 10px;border-top: solid thin #e1e1e1;font-size: 20px;">
                                                    <b>The best way to predict the future is to create it.</b>
                                                </h5>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="copydiv" class="display-none"></div>

    {{--<script>--}}
    {{--var doc = new jsPDF();--}}
    {{--var specialElementHandlers = {--}}
    {{--'#editor': function (element, renderer) {--}}
    {{--return true;--}}
    {{--}--}}
    {{--};--}}

    {{--$('#cmd').click(function () {--}}
    {{--doc.fromHTML($('#content').html(), 15, 15, {--}}
    {{--'width': 170,--}}
    {{--'elementHandlers': specialElementHandlers--}}
    {{--});--}}
    {{--doc.save('sample-file.pdf');--}}
    {{--});--}}

    {{--</script>--}}

@endsection