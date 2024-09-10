<table border="0" align="center" cellpadding="0" cellspacing="0" width="600"
    style="width:600px;max-width:600px;margin:0 auto;">
    <tbody>
        <tr>
            <td align="left" bgcolor="#FFFFFF" style="padding: 30px;">
                <p style="margin:0px 0px 20px;">Dear <strong>{USER_NAME}</strong>,</p>
                <p style="margin:0px 0px 20px;">We hope this message finds you well. We're writing to confirm that diagnosis submitted for claim number <strong>{CLAIM_NO}</strong> has been approved within the committed Turn-around Time.</p>
                <p style="margin:0px 0px 20px;font-weight:600;">Will request you to close the case at the soonest and confirm once claim is closed to people copied in this mail. Thanks.</p>
            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td align="left" bgcolor="#f0f0f0" style="padding: 30px;">
                <p style="margin:0px;">Best regards,</p>
                <p style="margin:0px;"><a href="{{env('APP_URL')}}" target="_blank">{{env('APP_NAME')}}</a></p>
            </td>
        </tr>
    </tfoot>
</table>
