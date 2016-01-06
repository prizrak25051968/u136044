<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/intranet/public/index.php");
$APPLICATION->SetTitle(GetMessage("CP_WELCOME"));
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
?>
    <td width="468" valign="top" bgcolor="#F1F1F1"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td bgcolor="#FCFDFD"><table width="100%" border="0" cellspacing="10" cellpadding="0">
                        <tr>
                            <td><img src="<?=SITE_TEMPLATE_PATH;?>templates/main/images/index_18.gif" width="273" height="18" alt=""></td>
                        </tr>
                        <tr>
                            <td><table width="100%" border="0" cellspacing="10" cellpadding="0">
                                    <tr>
                                        <td width="5%"><img src="<?=SITE_TEMPLATE_PATH;?>templates/main/images/index_23.jpg" width="84" height="64" alt=""></td>
                                        <td width="95%" class="gray-text-regular"><strong>Lorem ipsum dolor sit amet,</strong> consectetuer adipiscing elit. Nullam const commodo arcu. Donec sit amet orci sit amet lorem nonummy congue. In hac habitasse <a href="#" class="gray-text-underline">platea dictumst</a>. <br>
                                            Proin hendrerit pharetra nisl. Sed vestib porta augue. <br>
                                            Aenean malesuada, justo eget aliquam volutpat arcu. nisl. </td>
                                    </tr>
                                </table></td>
                        </tr>
                        <tr>
                            <td><table width="100%" border="0" cellspacing="5" cellpadding="0">
                                    <tr>
                                        <td width="48%" class="orange-text-regular">-&rsaquo; <a href="#" class="orange-text-underline">Nisi ut aliquip ex ea commodo conse</a><br>
                                            -&rsaquo; <a href="#" class="orange-text-underline">Duis aute irure dolor  reprehenderit</a></td>
                                        <td width="5%"><img src="<?=SITE_TEMPLATE_PATH;?>templates/main/images/spacer.gif" width="1" height="1"></td>
                                        <td width="47%"><span class="orange-text-regular">-&rsaquo; <a href="#" class="orange-text-underline">Nisi ut aliquip ex ea commodo conse</a><br>
-&rsaquo; <a href="#" class="orange-text-underline">Duis aute irure dolor  reprehenderit</a></span></td>
                                    </tr>
                                </table></td>
                        </tr>
                    </table></td>
            </tr>
            <tr>
                <td bgcolor="#F1F1F1"><table width="100%" border="0" cellspacing="10" cellpadding="0">
                        <tr>
                            <td width="50%" valign="top"><table width="100%" border="0" cellspacing="5" cellpadding="0">
                                    <tr>
                                        <td><p><img src="<?=SITE_TEMPLATE_PATH;?>templates/main/images/index_40.gif" width="103" height="14" alt=""></p>
                                            <p>&nbsp;</p></td>
                                    </tr>
                                    <tr>
                                        <td class="gray-text-regular"><p><strong>Lorem ipsum dolor sit amet, </strong>consectetuer adipiscing elit. Nullam const commodo <a href="#" class="gray-text-underline">arcu.</a> Donec sit amet orci sit amet lorem nonummy congue. </p>
                                            <p>&nbsp;</p></td>
                                    </tr>
                                    <tr>
                                        <td><span class="gray-text-regular">-&rsaquo;</span><span class="orange-text-regular"> <a href="#" class="orange-text-underline">vestib porta augue  enean malesuada </a><br>
  </span><span class="gray-text-regular">-&rsaquo;</span><span class="orange-text-regular"> <a href="#" class="orange-text-underline">proin hendrerit pharetra nisl sed </a></span></td>
                                    </tr>
                                </table></td>
                            <td width="5%"><img src="<?=SITE_TEMPLATE_PATH;?>templates/main/images/index_35.gif" width="1" height="159" alt=""></td>
                            <td width="45%" valign="top"><table width="100%" border="0" cellspacing="5" cellpadding="0">
                                    <tr>
                                        <td><p><img src="<?=SITE_TEMPLATE_PATH;?>templates/main/images/index_43.gif" width="100" height="14" alt=""></p>
                                            <p>&nbsp;</p></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Lorem ipsum dolor sit amet, </strong>consectetuer adipiscing elit. Nullam const commodo <a href="#" class="gray-text-underline">arcu.</a> Donec sit </td>
                                    </tr>
                                    <tr>
                                        <td><table width="100%" border="0" cellspacing="5" cellpadding="0">
                                                <tr>
                                                    <td width="13%" align="center" bgcolor="#CECECE"><span class="gray-text-regular">-&rsaquo;</span></td>
                                                    <td width="87%" align="center" bgcolor="#E0E0E0"><a href="#" class="black-text-regular"><strong>aliquam eu purus non at </strong></a> </td>
                                                </tr>
                                                <tr>
                                                    <td align="center" bgcolor="#CECECE"><span class="gray-text-regular">-&rsaquo;</span></td>
                                                    <td align="center" bgcolor="#E0E0E0"><a href="#" class="black-text-regular"><strong>aliquam eu purus non at </strong></a></td>
                                                </tr>
                                                <tr>
                                                    <td align="center" bgcolor="#CECECE"><span class="gray-text-regular">-&rsaquo;</span></td>
                                                    <td align="center" bgcolor="#E0E0E0"><a href="#" class="black-text-regular"><strong>aliquam eu purus non at </strong></a></td>
                                                </tr>
                                            </table></td>
                                    </tr>
                                </table></td>
                        </tr>
                    </table></td>
            </tr>
        </table>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>