<?php
/**
 * Created by PhpStorm.
 * User: Георгий
 * Date: 05.01.2016
 * Time: 14:18
 */?>
<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?> <?IncludeTemplateLangFile(__FILE__);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="<?=LANGUAGE_ID?>">
<head>
  <title><?$APPLICATION->ShowTitle();?></title>
  <?$APPLICATION->ShowHead();?>
  <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/template_styles.css", true);?>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?$APPLICATION->ShowPanel();?>
<table width="733" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td style="padding: 0px 140px 0px 140px"><table width="100%" border="0" cellspacing="10" cellpadding="0">
      <tr>
        <td align="center"><a href="#" class="black-text-regular">company</a></td>
        <td align="center"><img src="<?=SITE_TEMPLATE_PATH;?>/images/index_03.gif" width="1" height="19" alt="Razdelitel" /> </td>
        <td align="center"><a href="#" class="black-text-regular">services</a></td>
        <td align="center"><img src="<?=SITE_TEMPLATE_PATH;?>/images/index_03.gif" width="1" height="19" alt=""></td>
        <td align="center"><a href="#" class="black-text-regular">solutions</a></td>
        <td align="center"><img src="<?=SITE_TEMPLATE_PATH;?>/images/index_03.gif" width="1" height="19" alt=""></td>
        <td align="center"><a href="#" class="black-text-regular">clients</a></td>
        <td align="center"><img src="<?=SITE_TEMPLATE_PATH;?>/images/index_03.gif" width="1" height="19" alt=""></td>
        <td align="center"><a href="#" class="black-text-regular">contacts</a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td> <?$APPLICATION->IncludeComponent( "bitrix:main.include", "", Array(     "COMPONENT_TEMPLATE" => ".default",     "AREA_FILE_SHOW" => "file",     "AREA_FILE_SUFFIX" => "inc",     "EDIT_TEMPLATE" => "",     "PATH" => SITE_TEMPLATE_PATH."/include_areas/logo.php"));?> </td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="264" valign="top" bgcolor="#F1F1F1"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td bgcolor="#FCFDFD"><table width="100%" border="0" cellspacing="10" cellpadding="0">
              <tr>
                <td><img src="<?=SITE_TEMPLATE_PATH;?>/images/index_15.gif" width="181" height="18" alt=""></td>
              </tr>
              <tr>
                <td> <p><img src="<?=SITE_TEMPLATE_PATH;?>/images/index_26.gif" width="9" height="9" alt=""> <span class="black-text-regular">30-01-08</span></p>
                  <p class="black-text-regular">                    Tempor sit incididunt sitm laborelore magna aliqua enim ad minim.</p></td>
              </tr>
              <tr>
                <td height="3" background="<?=SITE_TEMPLATE_PATH;?>/images/index_30.gif"><img src="<?=SITE_TEMPLATE_PATH;?>/images/spacer.gif" width="1" height="1"></td>
              </tr>
              <tr>
                <td><p><img src="<?=SITE_TEMPLATE_PATH;?>/images/index_26.gif" width="9" height="9" alt=""><span class="black-text-regular"> 30-01-08</span></p>
                  <p class="black-text-regular"> Tempor sit incididunt sitm laborelore magna aliqua enim ad minim.</p>
                  <p class="orange-text-regular">&raquo; <a href="#" class="broun-text-underline">more news</a></p></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td bgcolor="#F1F1F1"><table width="100%" border="0" cellspacing="10" cellpadding="0">
              <tr>
                <td colspan="2"><img src="<?=SITE_TEMPLATE_PATH;?>/images/index_37.gif" width="157" height="16" alt=""></td>
              </tr>
              <tr>
                <td colspan="2">
                  <label>
                    <input type="text" name="textfield">
                    </label>                </td>
              </tr>
              <tr>
                <td width="70%">
                  <label>
                    <input name="radiobutton" type="radio" value="radiobutton">
                    </label>

unsubscribe</td>
                <td width="30%" align="center" bgcolor="#636363"><a href="#" class="white-text"><strong>Submit</strong></a></td>
              </tr>
              <tr>
                <td colspan="2"><p>&nbsp;</p>
                  <p>&nbsp;</p></td>
              </tr>
              <tr>
                <td colspan="2"><table width="100%" border="0" cellspacing="10" cellpadding="0">
                  <tr>
                    <td width="9%"><img src="<?=SITE_TEMPLATE_PATH;?>/images/index_54.gif" width="30" height="30" alt=""></td>
                    <td width="91%" class="black-text-regular"><?$APPLICATION->IncludeComponent(
                          "bitrix:main.include",
                          "",
                          Array(
                              "COMPONENT_TEMPLATE" => ".default",
                              "AREA_FILE_SHOW" => "file",
                              "AREA_FILE_SUFFIX" => "inc",
                              "EDIT_TEMPLATE" => "",
                              "PATH" => SITE_TEMPLATE_PATH."/include_areas/phone.php"
                          ));?>
                      <br>
                      <?$APPLICATION->IncludeComponent(
                          "bitrix:main.include",
                          "",
                          Array(
                              "COMPONENT_TEMPLATE" => ".default",
                              "AREA_FILE_SHOW" => "file",
                              "AREA_FILE_SUFFIX" => "inc",
                              "EDIT_TEMPLATE" => "",
                              "PATH" => SITE_TEMPLATE_PATH."/include_areas/faks.php"
                          ));?></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
        <td width="1"><img src="<?=SITE_TEMPLATE_PATH;?>/images/index_12.gif" width="1" height="465" alt=""><img src="<?=SITE_TEMPLATE_PATH;?>/images/spacer.gif" width="1" height="1"></td>