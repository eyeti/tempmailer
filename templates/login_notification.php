<!-- =============== START BODY =============== -->
<div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr>
                <td>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                            <tr>
                                <td class="specbundle">
                                    <div class='contentEditableContainer contentTextEditable'>
                                        <div class='contentEditable' style='text-align: left;'>
                                            <?php
                                                $params = json_decode($_POST['parameters'], true);
                                            ?>
                                            <div style="text-align: center;">
                                                <h3>New log-in alert</h3>
                                            </div>


                                            <div style="height: 20px"></div>
                                            <p>
                                                Hello.
                                            </p>
                                            <p>
                                                A new device was used to sign into your account:
                                            </p>

                                            <div style="height: 20px"></div>
                                            <table class="table table-bordered" width="100%">
                                                <tbody>
                                                    <tr>
                                                        <td>IP</td>
                                                        <td>
                                                            <?= $params['ip'] ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Date and Time</td>
                                                        <td>
                                                            <?= date('M j, Y g:ia', $params['timestamp']) ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div style="height: 20px"></div>
                                            <p>
                                                If this wasn’t you, we advise that you terminate all your sessions immediately and reset your password.
                                            </p>

                                            <!--div style="height: 20px"></div>
                                            <p>
                                                <a>Terminate sessions</a>
                                            </p-->
                                                
                                            <div style="height: 20px"></div>
                                            <p>
                                                If you are unable to do this, please contact us for further assistance.
                                            </p>


                                            <div style="height: 20px"></div>
                                            <p>Sincerely</p>
                                            <p>The Iriki Team</p>
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
