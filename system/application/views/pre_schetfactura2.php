<?php
$r = $r->row();
echo form_open("billing/schetfactura");
?>
<input type=hidden name=firm_id value="<?php echo $firm_id; ?>">
<input type='hidden' name='period_id' value="<?php echo $period_id; ?>">
<table>
    <tbody>
    <tr>
        <td>Выдать актом выполненых работ</td>
        <td><input type='checkbox' name='akt_vypolnenyh_rabot'></td>
    </tr>
    <tr>
        <td>Выдать накладной</td>
        <td><input type='checkbox' name='nakladnaya'></td>
    </tr>
    <tr>
        <td>Последний номер счета-фактуры</td>
        <td><input style="width:300px;" type="text" disabled value="<?php echo $max_schet_number; ?>"></td>
    </tr>
    <tr>
        <td>Другая дата выдачи:</td>
        <td><input style="width:300px;" name=data_schet value=''></td>
    </tr>
    <tr>
        <td>Условия оплаты по договору:</td>
        <td><input style="width:300px;" name=edit1 value='<?php echo $firm->edit1; ?>'></td>
    </tr>
    <tr>
        <td>Пункт назначения поставляемых товаров <br>(работ, услуг):</td>
        <td><input style="width:300px;" name=edit2 value='<?php echo $firm->edit2; ?>'></td>
    </tr>
    <tr>
        <td>Поставка товаров осуществлена по доверености:</td>
        <td><input style="width:300px;" name=edit3 value='<?php echo $firm->edit3; ?>'></td>
    </tr>
    <tr>
        <td>Способ отправления:</td>
        <td><input style="width:300px;" name=edit4 value='<?php echo $firm->edit4; ?>'></td>
    </tr>
    <tr>
        <td>1-й дополнительный:</td>
        <td><input style="width:300px;" name=edit5 value='<?php echo $firm->edit5; ?>'></td>
    </tr>
    <tr>
        <td>2-й дополнительный:</td>
        <td><input style="width:300px;" name=edit6 value='<?php echo $firm->edit6; ?>'></td>
    </tr>
    <tr>
        <td>Грузополучатель:</td>
        <td><input style="width:300px;" type="text"
                   value="<?php echo $firm->bin . ', ' . $firm->name . ',' . $firm->address; ?>" name="consignee">
        </td>
    </tr>
    <tr>
        <td>Получатель:</td>
        <td><input style="width:300px;" type="text" value="<?php echo $firm->name; ?>" name="recipient">
        </td>
    </tr>
    <tr>
        <td>БИН и адрес нахождения получателя:</td>
        <td><input style="width:300px;" type="text" value="<?php echo "БИН " . $firm->bin . ", " . $firm->address; ?>"
                   name="recipient_address">
        </td>
    </tr>
    </tbody>
</table>
<input type=submit value='Открыть счетфактуру'/>
<?php echo form_close(); ?>
