<table border="0" align="center" cellpadding="0" cellspacing="0" width="600"
    style="width:600px;max-width:600px;margin:0 auto;">
    <tbody>
        <tr>
            <td align="center" bgcolor="#f0f0f0" style="padding: 30px;text-align:center;">
                {LOGO}
            </td>
        </tr>
        <tr>
            <td align="left" bgcolor="#FFFFFF" style="padding: 30px;">
                <p style="margin:0px 0px 20px;">Dear <strong>{USER_NAME}</strong>,</p>
                <p style="margin:0px 0px 20px;">We have received a request to reset your password. Your new password is: <strong>{PASSWORD}</p>
                <p style="margin:0px 0px 20px;">If you did not request this password reset, please contact our support team immediately.</p>
                <p style="margin:0px 0px 10px;font-weight:400;">Thank you for using our service.</p>
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
