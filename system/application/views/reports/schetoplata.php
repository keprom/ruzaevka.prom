<?php
function datetostring($date)
{
    $d = explode("-", $date);
    return $d['2'] . '.' . $d['1'] . '.' . $d['0'];
}

function f_d($var)
{
    if ($var == 0) return "&nbsp;"; else
        return sprintf("%22.2f", round($var * 100) / 100);
}

function f_d2($var)
{
    if ($var == 0) return "&nbsp;"; else
        return sprintf("%22.2f", round($var * 100) / 100);
}

?>
<html>
<head>
    <title>Счет на оплату</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
</head>
<body>
<table width=100%>
    <tr>
        <td align=left>
            <center><b>СЧЕТ<?php echo $schet; ?> №</b>
                <?php echo "0" . $number . ' от ';
                if (strlen($data_schet) == 0) {
                    echo datetostring($schetfactura_date->date);
                } else {
                    echo $data_schet;
                } ?>
            </center>
        </td>
        <td> (1)</td>
    </tr>

    <tr>
        <td width=2100px><b>Поставщик</b> <u><?php echo $org->org_name; ?></u>

        </td>
        <td> (2)</td>
    </tr>
    <tr>
        <td width=2100px> БИН и адрес местнахождения
            поставщика <?php echo " <u>" . $org->bin . " " . $org->address; ?></u>
        </td>
        <td> (2а)</td>
    </tr>
    <tr>
        <td width=2100px> Расчетный счет поставщика <u><?php echo $org->IIK; ?> КБЕ-<?php echo $org->Bank_kbe; ?>
                КНП-<?php echo $org->bank_knp; ?> <?php echo $org->bank_name; ?>
                БИК <?php echo $org->bank_bik; ?></u></td>
        <td> (2б)</td>
    </tr>
    <tr>
        <td width=2100px> Свидетельство о постановке на регистрационный учет по
            НДС <?php echo $org->svidetelstvo_nds; ?> </td>
        <td></td>
    </tr>
    <tr>
        <td width=2100px> Договор(контракт) на поставку товаров (работ, услуг)
            №<u><?php echo $firm->dogovor . "        </u> от <u>       " . datetostring($firm->dogovor_date); ?>                 </u>
        </td>
        <td> (3)</td>
    </tr>
    <tr>
        <td width=2100px> Условия оплаты по договору
            (контракту)<u><?php echo $firm->edit1; ?>                                                                                                                             </u>
        </td>
        <td> (3а)</td>
    </tr>
    <tr>
        <td width=2100px> Пункт назначения поставляемых товаров (работ,
            услуг)<u><?php echo $firm->edit2; ?>                                                                                                                                           </u>
        </td>
        <td> (4)</td>
    </tr>
    <tr align=right>
        <td width=2100px><i><FONT size=1>(государство, регион, область, город, район) </font> </i></td>
        <td></td>
    </tr>
    <tr>
        <td width=2100px> Поставка товаров осуществлена по доверенности
            №<u><?php echo $firm->edit3; ?>                                                       </u></td>
        <td> (5)</td>
    </tr>
    <tr>
        <td width=2100px> Способ отправления
            <u><?php echo $firm->edit4; ?>                                                                                                                                                    </u>
        </td>
        <td> (6)</td>
    </tr>
    <tr>
        <td width=2100px> Товарно-транспортная накладная №_____ от ________________</td>
        <td> (7)</td>
    </tr>
    <tr>
        <td width=2100px> Грузоотправитель
            <u><?php echo "БИН " . $org->bin . ", " . $org->org_name . ", " . $org->address; ?>   </u></td>
        <td> (8)</td>
    </tr>
    <tr align=right>
        <td width=2100px align="center"><i><FONT size=1>(РНН, наименование и адрес места нахождения) </font></i></td>
        <td></td>
    </tr>
    <tr>
        <td width=2100px>Жүк алушы БСН<br/>Грузополучатель БИН
            <u> <?php echo $consignee; ?>                                                                                                                 </u>
        </td>
        <td> (9)</td>
    </tr>
    <tr align=right>
        <td width=2100px align="center"><i><FONT size=1>(РНН, наименование и адрес места нахождения) </font></i></td>
        <td></td>
    </tr>
    <tr>
        <td width=2100px><b>Алушы<br/>Получатель <u><?php echo $recipient; ?></u></b></td>
        <td> (10)</td>
    </tr>
    <tr>
        <td width=2100px>Алушының БСН<br/>БИН и адрес нахождения получателя <u> <?php echo $recipient_address; ?></u>
        </td>
        <td> (10а)</td>
    </tr>
    <tr>
        <td width=2100px> Расчетный счет получателя <u><?php echo $firm->raschetnyy_schet; ?></u> в банке
            <u><?php echo $bank->name; ?></u></td>
        <td> (10б)</td>
    </tr>
</table>
<table cellSpacing=0 border=1>
    <TR>
        <TD vAlign=center align=middle rowSpan=2><FONT size=2>№ п/п</FONT>
        <TD vAlign=center align=middle rowSpan=2><FONT size=2>Наименование товаров
                (работ, услуг)</FONT>
        <TD vAlign=center align=middle rowSpan=2><FONT size=2>Ед. изм.</FONT>
        <TD vAlign=center align=middle rowSpan=2><FONT size=2>Кол-во
                (объем)</FONT>
        <TD vAlign=center align=middle rowSpan=2><FONT size=2>Цена тенге</FONT>
        <TD vAlign=center align=middle rowSpan=2><FONT size=2>Стоимость товаров
                (работ, услуг) без НДС</FONT>
        <TD vAlign=center align=middle colSpan=2><FONT size=2>НДС</FONT>
        <TD vAlign=center align=middle rowSpan=2><FONT size=2>Всего стоимость
                реализации</FONT>
        <TD vAlign=center align=middle colSpan=2><FONT size=2>Акциз</FONT></TD>
    <TR>
        <TD vAlign=center align=middle><FONT size=2>Ставка</FONT>
        <TD vAlign=center align=middle><FONT size=2>Сумма</FONT>
        <TD vAlign=center align=middle><FONT size=2>Ставка</FONT>
        <TD vAlign=center align=middle><FONT size=2>Сумма</FONT></TD>
    <TR>
        <TD vAlign=center align=middle><FONT size=1><I>1</I></FONT>
        <TD vAlign=center align=middle><FONT size=1><I>2</I></FONT>
        <TD vAlign=center align=middle><FONT size=1><I>3</I></FONT>
        <TD vAlign=center align=middle><FONT size=1><I>4</I></FONT>
        <TD vAlign=center align=middle><FONT size=1><I>5</I></FONT>
        <TD vAlign=center align=middle><FONT size=1><I>6</I></FONT>
        <TD vAlign=center align=middle><FONT size=1><I>7</I></FONT>
        <TD vAlign=center align=middle><FONT size=1><I>8</I></FONT>
        <TD vAlign=center align=middle><FONT size=1><I>9</I></FONT>
        <TD vAlign=center align=middle><FONT size=1><I>10</I></FONT>
        <TD vAlign=center align=middle><FONT size=1><I>11</I></FONT></TD>
        <?php $sum_bez_nds = 0;
        $sum_nds = 0;
        $sum = 0;
        $i = 1;
        for ($j = 0;
        $j < $tariff_count;
        $j++):
        if ($tariff_kvt[$j] == 0) continue;
        ?>
    <TR>
        <TD vAlign=center align=middle><FONT size=1><?php echo $i++; ?> </FONT>
        <TD vAlign=center align=middle><FONT size=1>Электроэнергия
                за <?php echo get_month_title($schetfactura_date->date) . ' ' . get_year_number($schetfactura_date->date); ?>
                года</FONT>
        <TD vAlign=center align=middle><FONT size=1>кВт</FONT>
        <TD vAlign=center align=middle><FONT size=1>
                <?php echo f_d($tariff_kvt[$j]); ?> </FONT>
        <TD vAlign=center align=middle><FONT size=1>
                <?php echo f_d($tariff_value[$j]); ?> </FONT>
        <TD vAlign=center align=middle><FONT size=1>
                <?php
                echo f_d($tariff_kvt[$j] * $tariff_value[$j]);
                $sum_bez_nds += f_d2($tariff_kvt[$j] * $tariff_value[$j]);
                ?> </FONT>
        <TD vAlign=center align=middle><FONT size=1> <?php echo f_d($period->nds); ?> </FONT>
        <TD vAlign=center align=middle><FONT size=1>
                <?php echo f_d($period->nds * $tariff_kvt[$j] * $tariff_value[$j] / 100);
                $sum_nds += $period->nds * $tariff_kvt[$j] * $tariff_value[$j] / 100; ?>
            </FONT>
        <TD vAlign=center align=middle><FONT size=1>
                <?php echo
                f_d(($period->nds + 100) * $tariff_kvt[$j] * $tariff_value[$j] / 100);
                $sum += ($period->nds + 100) * $tariff_kvt[$j] * $tariff_value[$j] / 100; ?>
            </FONT>
        <TD vAlign=center align=middle><FONT size=1>0</FONT>
        <TD vAlign=center align=middle><FONT size=1>0</FONT></TD>
        <?php endfor; ?>
    <TR>
        <TD align=left colSpan=5><FONT size=2><B>Всего по счету:</B></FONT>
        <TD align=right><FONT size=2><B>&nbsp;<?php echo f_d2($sum_bez_nds); ?></B></FONT>
        <TD align=right bgColor=#c0c0c0><FONT size=2>&nbsp;</FONT>
        <TD align=right><FONT size=2><B>&nbsp;<?php echo f_d2($sum_nds); ?></B></FONT>
        <TD align=right><FONT size=2><B>&nbsp;<?php echo f_d2($sum_bez_nds + $sum_nds); ?></B></FONT>
        <TD align=right bgColor=#c0c0c0><FONT size=2>&nbsp;</FONT>
        <TD align=right><FONT size=2><B>&nbsp;</B></FONT></TD>

</table>
<center>
    <?php echo num2str(f_d2($sum_bez_nds + $sum_nds)); ?>
</center>

<table width=100%>
    <tr>
        <td align=left>Руководитель организации</td>
        <td align=right>ВЫДАЛ (Ответственное лицо поставщика)</td>
    </tr>
    <tr>
        <td align=left><?php echo $org->director; ?> ________________</td>
        <td align=right>Ведущий инженер <u>Бодня М.А.</u> _____________</td>
    </tr>
    <tr>
        <td align=left><sub>(Ф.И.О., подпись)</sub></td>
        <td align=right><sub>(Ф.И.О., подпись)</sub></td>
    </tr>
    <tr>
        <td align=left>Уполномоченный на подписание счета-фактуры за директора,<br> заместитель директора по сбыту <?php echo $org->nachalnik_otdela_sbyta; ?> _______________</td>
        <td></td>
    </tr>
    <tr>
        <td align=left><sub>(Ф.И.О., подпись)</sub></td>
        <td align=right></td>
    </tr>
    <tr>
        <td align=left>Главный бухгалтер организации</td>
        <td align=right>Бухгалтер потребителя</td>
    </tr>
    <tr>
        <td align=left><?php echo $org->glav_buh; ?> ________________</td>
        <td align=right>_____________ ___________________</td>
    </tr>
    <tr>
        <td align=left><sub>(Ф.И.О., подпись)</sub></td>
        <td align=right><sub>(Ф.И.О., подпись)</sub></td>
    </tr>
</table>
<br>
<tr align=left>
    <td width='2100px'>Примечание. Без печати недействительно.Оригинал (первый экземпляр)-покупателю.Копия (второй
        экземпляр)-поставщику.
    </td>
</tr>

</body>
</html>