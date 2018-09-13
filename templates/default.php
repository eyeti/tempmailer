<!-- =============== START BODY =============== -->
<div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tbody>
      <tr>
        <td height="40"></td>
      </tr>
      <tr>
        <td>
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody>
              <tr>
                <td class="specbundle">
                  <div class='contentEditableContainer contentTextEditable'>
                    <div class='contentEditable' style='text-align: left;'>
                        <h2 style="font-size: 20px;"><?= isset($_POST['salutation']) ? $_POST['salutation'] : '&lt Salutation &gt' ?> <?= isset($_POST['to_name']) ? $_POST['to_name'] : '&lt to_name &gt' ?>,</h2>
                        <br>
                        <p>
                            This is the default template. It is not meant to be really used except to show several examples or for testing purposes.
                        </p>
                        <p>
                            You may want to properly set up the default template in the .htaccess file.
                        </p>

                        <div style="height: 20px"></div>
                        <p>For instance, this is how you insert a link for templates such as password resets or something similar.</p>
                        <p>Click <a href="#">here</a> to perform some action this email is all about.</p>
                        <p>We should work out a style for buttons too.</p>

                        <div style="height: 20px"></div>
                        <p>Now, here is a table, useful for receipts, invoices, reports and the like.</p>
                        <p>It uses a header to introduce things, then the main table.</p>
                        <p>The table iterates through POST variables which have == separating key from value.</p>
                        <table class="table table-bordered" width="100%">
                            <thead>
                                <tr style="text-align: center;">
                                    <th colspan="2"><?= isset($_POST['title']) ? $_POST['title'] : '&lt Table title, can be passed in as POST variable title &gt' ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- loop for other quantities -->
                                <?php foreach ($_POST as $_index => $value): $_parts = explode('==', $value);?>
                                    <?php if (count($_parts) == 2): ?>
                                        <tr>
                                            <th scope="row"><?= $_parts[0] ?></th>
                                            <td><?= $_parts[1] ?></td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                <tr>
                                    <th scope="row"></th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">Total</th>
                                    <td class="text-right">
                                        <?= isset($_POST['currency']) ? $_POST['currency'] : '₦' ?>
                                        <?= isset($_POST['amount']) ? number_format($_POST['amount'], 2) : number_format(0, 2) ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>


                        <div style="height: 20px"></div>
                        <p>
                            We do thank you for using our tempmailer.
                            <br> The Eyeti Team
                        </p>
                        <p>PS. We have inserted contents of your $_POST provided variable below.</p>
                        <?= (isset($_POST['body']) ? $_POST['body'] : '&lt body &gt') ?>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<!-- =============== END BODY =============== -->
