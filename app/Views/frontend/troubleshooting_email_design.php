<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,500;1,400&family=Noto+Serif:wght@300&family=Roboto+Condensed:ital@1&display=swap" rel="stylesheet">
<style>

body
{
    font-family: 'Roboto Condensed', sans-serif;
}

</style>
<table border="0" width="100%" cellspacing="0" cellpadding="0" align="center"> <tbody> <tr> <td class="m_-5016142525234961042top-padding" style="padding:20px 15px 0px 15px" align="center" bgcolor="#f5f5f5"> <table border="0" width="" cellspacing="0" cellpadding="0" align="center"> <tbody> <tr> <td style="padding:0px" align="center" width="600"> <table class="m_-5016142525234961042responsive-table" border="0" width="100%" cellspacing="0" cellpadding="0" align="center"> <tbody> <tr> <td style="padding-bottom:20px" align="start"><a href="https://printerradar.com/"> <img style="display:inline;float:none;text-align:center;width:192px" title="printmenow" src="https://printerradar.com/assets/images/printmenow_logo.png" alt="Logo" width="192" height="68" class="CToWUd"> </a></td> </tr> </tbody> </table>   <table class="m_-5016142525234961042responsive-table" border="0" width="100%" cellspacing="0" cellpadding="0" align="center"> <tbody> <tr> <td style="padding-bottom:15px" align="center" bgcolor="#ffffff" width="600"> <table border="0" width="100%" cellspacing="0" cellpadding="0"> <tbody> <tr> <td class="m_-5016142525234961042zero-padding" style="width:100%;padding-left:0;padding-right:0;background:transparent" align="center" width="100%"><a href="https://printerradar.com/" rel="noopener noreferrer">

<img class="m_-5016142525234961042img-max CToWUd" style="max-width:100%;width:100%;height:250px!important;display:block;color:#555555;font-size:16px" src="https://printerradar.com/assets/images/printer-bg-3.avif" alt="printmenow" width="600" height="auto" border="0">
</a></td> </tr>

   
    <table>
<tbody>
    <tr>
        <td>
            <div style="font-size:18px;font-weight:bold;background:#979797;border-radius: 0px;padding: 17px;margin: 0 auto;color: aliceblue;">
                  <span>Name : <?php echo @$_POST['tuser_name']; ?></span><br>
                  <span>Name : <?php echo @$_POST['tuser_email']; ?></span><br>
                  <span>Printer Brand : <?php echo @$_POST['tuser_printer_brand']; ?></span><br>
                  <span>Printer Model : <?php echo @$_POST['tuser_printer_modal']; ?></span>
            </div>

        </td>
    </tr>
<tr> <td style="color:#000000;font-size:18px;line-height:24px;font-weight:bold;text-align:start;background:#b8b9a380;border-radius:5px;padding:15px 10px 4px 10px">
    <form action="https://printerradar.com//submit_by_user.php" method="post">
          
    <input type="hidden" name="tuser_name" value="<?php echo @$_POST['tuser_name']; ?>">
    <input type="hidden" name="tuser_printer_brand" value="<?php echo @$_POST['tuser_printer_brand']; ?>">
    <input type="hidden" name="tuser_printer_modal" value="<?php echo @$_POST['tuser_printer_modal']; ?>">
    <input type="hidden" name="tuser_email" value="<?php echo @$_POST['tuser_email']; ?>">

        <label for="issue_resolved">Is your primary issue resolved?</label>
        <select id="issue_resolved" name="issue_resolved" style="
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
">
          <option value="Yes">Yes</option>
          <option value="No">No</option>
        </select>

        <label for="test_printer">Have you received the test print?</label>
        <select id="test_printer" name="test_printer" style="
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
">
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>

        <label for="term_service">Are you aware about the terms of services being provided to you?</label>
        <select id="term_service" name="term_service" style="
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
">
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>

        <label for="receive_invoice">Did you receive the invoice for this transaction?</label>
        <select id="receive_invoice" name="receive_invoice" style="
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
">
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>

        <label for="authorise_payment">Do you authorise a payment of  <?php echo @$_POST['tuser_payment']; ?> to Print Me Now? </label>
        <select id="authorise_payment" name="authorise_payment" style="
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
">
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>

       

        <input type="submit" class="m_-5016142525234961042img-max" style="font-size:18px;text-transform:uppercase;line-height:24px;width: 100%;font-weight:bold;border: 0px;text-align: center;background:#fcce0c;border-radius:5px;text-decoration:none;color:#fff;display:block;padding:7px 10px 7px 10px;cursor: pointer;" value="submit" />
       
      </form>

     
    </td> 
</tr>



</tbody>
 </table>


