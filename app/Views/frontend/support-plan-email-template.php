
<?php
$name = !empty($formData['name']) ? $formData['name'] : null;
$email = !empty($formData['email']) ? $formData['email'] : null;
$phone = !empty($formData['phone']) ? $formData['phone'] : null;
$plan = !empty($formData['plan']) ? $formData['plan'] : null;
$ipAddress = !empty($ipAddress) ? $ipAddress : 'N/A';
?>


<body style="margin: 0px; background-color: #f2f3f8;">
    <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8" style="font-family: 'Open Sans', sans-serif;">
            <tr>
    <td style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight: 500; color: rgba(0, 0, 0, .64)">
        Name:
    </td>
    <td style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
        <?php echo $name; ?>
    </td>
</tr>

<tr>
    <td style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight: 500; color: rgba(0, 0, 0, .64)">
        Email:
    </td>
    <td style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
        <?php echo $email; ?>
    </td>
</tr>

<tr>
    <td style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight: 500; color: rgba(0, 0, 0, .64)">
        Country:
    </td>
    <td style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
        <?php echo $phone; ?>
    </td>
</tr>


<tr>
    <td style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight: 500; color: rgba(0, 0, 0, .64)">
        Selected Plan:
    </td>
    <td style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
        <?php echo $plan; ?>
    </td>
</tr>

<tr>
    <td style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight: 500; color: rgba(0, 0, 0, .64)">
        IP Address:
    </td>
    <td style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
        <?php echo $ipAddress; ?>
    </td>
</tr>

    </table>




