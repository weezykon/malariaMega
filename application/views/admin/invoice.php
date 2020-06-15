<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Invoice</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
    body, button, input, select, textarea, p, tr,td {
      font-family: BlinkMacSystemFont,-apple-system,"Segoe UI",Roboto,Oxygen,Ubuntu,Cantarell,"Fira Sans","Droid Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
    }

  /**
   * Avoid browser level font resizing.
   * 1. Windows Mobile
   * 2. iOS / OSX
   */
  body,
  table,
  td,
  a {
    -ms-text-size-adjust: 100%; /* 1 */
    -webkit-text-size-adjust: 100%; /* 2 */
  }

  /**
   * Remove extra space added to tables and cells in Outlook.
   */
  table,
  td {
    mso-table-rspace: 0pt;
    mso-table-lspace: 0pt;
  }

  /**
   * Better fluid images in Internet Explorer.
   */
  img {
    -ms-interpolation-mode: bicubic;
  }

  /**
   * Remove blue links for iOS devices.
   */
  a[x-apple-data-detectors] {
    font-family: inherit !important;
    font-size: inherit !important;
    font-weight: inherit !important;
    line-height: inherit !important;
    color: inherit !important;
    text-decoration: none !important;
  }

  /**
   * Fix centering issues in Android 4.4.
   */
  div[style*="margin: 16px 0;"] {
    margin: 0 !important;
  }

  body {
    width: 100% !important;
    height: 100% !important;
    padding: 0 !important;
    margin: 0 !important;
  }

  /**
   * Collapse table borders to avoid space between cells.
   */
  table {
    border-collapse: collapse !important;
  }

  a {
    color: #1a82e2;
  }

  img {
    height: auto;
    line-height: 100%;
    text-decoration: none;
    border: 0;
    outline: none;
  }
  @media (min-width:800px) {
    .web{
      display: none !important;
    }
  }
  @media (max-width:770px) {
    .logo-mobile{
      display: none !important;
    }
    .text-mobile{
      text-align: center !important;
      padding-left: 10px !important;
    }
    .mobile-align{
      text-align: center !important;
    }
    img {
      width: 50px !important;
      height: 50px !important;
    }
  }
  </style>

</head>
<body style="background-color: #e9ecef;"  onload="window.print()">

  <!-- start body -->
  <table border="0" cellpadding="0" cellspacing="0" width="100%">

    <!-- start logo -->
    <tr>
      <td align="center" bgcolor="#e9ecef">
        <!--[if (gte mso 9)|(IE)]>
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
        <tr>
        <td align="center" valign="top" width="600">
        <![endif]-->
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
          <tr>
            <td align="center" valign="top" style="padding: 16px 24px;">
              <a href="<?= base_url() ?>" target="_blank" style="display: inline-block;">
                <img src="<?= base_url('assets/image/samsung-logo-blue.svg') ?>" style="width:100%; max-width:70px" class="logo-mobile">
                <img src="<?= base_url('assets/image/samsung-logo-blue.svg') ?>" class='web' style="width:150px;height:150px;">
              </a>
            </td>
          </tr>
        </table>
        <!--[if (gte mso 9)|(IE)]>
        </td>
        </tr>
        </table>
        <![endif]-->
      </td>
    </tr>
    <!-- end logo -->

    <!-- start hero -->
    <tr>
      <td align="center" bgcolor="#e9ecef">
        <!--[if (gte mso 9)|(IE)]>
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
        <tr>
        <td align="center" valign="top" width="600">
        <![endif]-->
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
          <tr>
            <td align="left" bgcolor="#ffffff" style="padding:0 24px 0;  text-align:center; border-top: 3px solid #d4dadf;">
              <h1 style="margin: 0; font-size: 25px; font-weight: 200; letter-spacing: -1px; line-height: 48px;">Invoice #<?= $reference; ?></h1>
              <span style="font-size: 10px; text-transform: uppercase; font-weight: normal;">Invoice Date: <?= date('M j, Y',$transaction_date) ?></span>
            </td>
          </tr>
        </table>
        <!--[if (gte mso 9)|(IE)]>
        </td>
        </tr>
        </table>
        <![endif]-->
      </td>
    </tr>
    <!-- end hero -->

    <!-- start copy block -->
    <tr>
      <td align="center" bgcolor="#e9ecef">
        <!--[if (gte mso 9)|(IE)]>
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
        <tr>
        <td align="center" valign="top" width="600">
        <![endif]-->
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">

    <!-- end receipt address block -->
          <!-- start copy -->
          <tr>
            <td align="left" bgcolor="#ffffff" style="padding:10px 24px;  font-size: 16px; line-height: 24px;">
              <p style="margin: 0;">Customer: <b><?= $user['u_firstname']?> <?= $user['u_lastname']?></b></p>
            </td>
          </tr>
          <tr>
            <td align="left" bgcolor="#ffffff" style="padding:10px 24px;  font-size: 16px; line-height: 24px;">
              <p style="margin: 0;">Address: <b><?= $user['u_address']?></b></p>
            </td>
          </tr>
          <!-- end copy -->

          <!-- start receipt table -->
          <tr>
            <td align="left" bgcolor="#ffffff" style="padding: 5px 24px;  font-size: 16px; line-height: 24px;">
              <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td align="left" bgcolor="#e9ecef" width="75%" style="padding: 12px; font-size: 16px; line-height: 24px;"><strong>Item</strong></td>
                  <td align="left" bgcolor="#e9ecef" width="25%" style="padding: 12px; font-size: 16px; line-height: 24px;"><strong>Quantity</strong></td>
                  <td align="left" bgcolor="#e9ecef" width="25%" style="padding: 12px; font-size: 16px; line-height: 24px;"><strong>Price</strong></td>
                </tr>
                <?php
                  $total = 0;
                  foreach($invoices as $invoice){
                ?>
                    <tr>
                        <td align="left" width="75%" style="padding: 6px 12px; font-size: 16px; line-height: 24px;"><?= $invoice['t_l_description'] ?></td>
                        <td align="left" width="25%" style="padding: 6px 12px; font-size: 16px; line-height: 24px;"><?= number_format($invoice['t_l_quantity']) ?></td>
                        <td align="left" width="25%" style="padding: 6px 12px; font-size: 16px; line-height: 24px;">₦<?= number_format($invoice['t_l_amount']) ?></td>
                    </tr>
                <?php
                  }
                ?>
                <tr>
                  <td align="left" width="75%" colspan="2" style="padding: 6px 12px; font-size: 16px; line-height: 24px; border-top: 2px dashed #e9ecef;"><b>Sub Total</b></td>
                  <td align="left" width="25%" style="padding: 6px 12px; font-size: 16px; line-height: 24px;border-top: 2px dashed #e9ecef;">₦<?= number_format($subtotal) ?></td>
                </tr>
                <?php
                    if($insurance['insured'] == 1){
                ?>
                    <tr>
                        <td align="left" width="75%" colspan="2" style="padding: 6px 12px; font-size: 16px; line-height: 24px; border-top: 2px dashed #e9ecef;"><b>Insurance: </b>Sentinel <?= $insurance['insured_type'] ?> Cover</td>
                        <td align="left" width="25%" style="padding: 6px 12px; font-size: 16px; line-height: 24px;border-top: 2px dashed #e9ecef;">₦<?= number_format($insurance['insured_price']) ?></td>
                    </tr>
                <?php
                    }
                ?>
                <tr>
                    <td align="left" width="75%" colspan="2" style="padding: 6px 12px; font-size: 16px; line-height: 24px; border-top: 2px dashed #e9ecef;"><b>Delivery:</b> <?= $delivery ?></td>
                    <td align="left" width="25%" style="padding: 6px 12px; font-size: 16px; line-height: 24px;border-top: 2px dashed #e9ecef;">₦<?= number_format($deliveryprice) ?></td>
                </tr>
                <?php
                    if($lifeinsured == 1){
                ?>
                    <tr>
                        <td align="left" width="75%" colspan="2" style="padding: 6px 12px; font-size: 16px; line-height: 24px; border-top: 2px dashed #e9ecef;"><b>Life Insurance</td>
                        <td align="left" width="25%" style="padding: 6px 12px; font-size: 16px; line-height: 24px;border-top: 2px dashed #e9ecef;">FREE</td>
                    </tr>
                <?php
                    }
                ?>
                <!-- Discount..Tax..Tip -->
                <tr>
                  <td align="left" width="75%" colspan="2" style="padding: 12px;  font-size: 16px; line-height: 24px; border-top: 2px dashed #e9ecef; border-bottom: 2px dashed #e9ecef;"><strong>Total</strong></td>
                  <td align="left" width="25%" style="padding: 12px;  font-size: 16px; line-height: 24px; border-top: 2px dashed #e9ecef; border-bottom: 2px dashed #e9ecef;"><strong>₦<?= number_format($subtotal + $deliveryprice + $insurance['insured_price']) ?></strong></td>
                </tr>
              </table>
            </td>
          </tr>
          <!-- end reeipt table -->

          <!-- start permission -->
          <tr>
            <td align="left" bgcolor="#ffffff" style="padding: 0 24px;  font-size: 14px; line-height: 20px; color: #000;" class="mobile-align">
              <p style="margin: 2px;">If you have any questions,</p>
              <p style="margin: 2px;">Please let us know.</p>
              <p style="margin: 2px;">Thanks,</p>
              <p style="margin: 2px;">Rifugio</p>
            </td>
          </tr>
          <!-- end permission -->

        </table>
        <!--[if (gte mso 9)|(IE)]>
        </td>
        </tr>
        </table>
        <![endif]-->
      </td>
    </tr>
    <!-- end copy block -->

    <!-- start footer -->
    <tr>
      <td align="center" bgcolor="#e9ecef" style="padding: 24px;" class="footer">
        <!--[if (gte mso 9)|(IE)]>
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
        <tr>
        <td align="center" valign="top" width="600">
        <![endif]-->
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">

          <!-- start unsubscribe -->
          <tr>
            <td align="center" bgcolor="#e9ecef" style="padding: 12px 24px;  font-size: 14px; line-height: 20px; color: #666;">
              <p style="margin: 0;">Powered by
                <a href="<?= base_url() ?>" target="_blank" style="color: #BD447D;text-decoration: none;">Samsung</a>
              </p>
            </td>
          </tr>
          <!-- end unsubscribe -->

        </table>
        <!--[if (gte mso 9)|(IE)]>
        </td>
        </tr>
        </table>
        <![endif]-->
      </td>
    </tr>
    <!-- end footer -->

  </table>
  <!-- end body -->

</body>
</html>
