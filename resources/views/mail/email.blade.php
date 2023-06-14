<table width="99%" border="0" cellpadding="1" cellspacing="0" bgcolor="#EAEAEA">
    <tbody>
        <tr>
            <td>
                <table width="100%" border="0" cellpadding="3" cellspacing="0" bgcolor="#FFFFFF">
                    <tbody>
                        <tr style="background: #fff;">
                            <td><center><h2>Contact Us Form</h2></center></td>
                        </tr>
                        <tr bgcolor="#EAF2FA">
                            <td>
                                <font style="font-family:sans-serif;font-size:12px"><strong>FULL NAME</strong></font>
                            </td>
                        </tr>
                        <tr bgcolor="#FFFFFF">
                            <td>
                                <font style="font-family:sans-serif;font-size:12px">{{$name}}</font>
                            </td>
                        </tr>
                        <tr bgcolor="#EAF2FA">
                            <td>
                                <font style="font-family:sans-serif;font-size:12px"><strong>Email id</strong></font>
                            </td>
                        </tr>
                        <tr bgcolor="#FFFFFF">
                            <td>
                                <font style="font-family:sans-serif;font-size:12px"><a href="mailto:{{ $email }}" rel="noreferrer" target="_blank">{{ $email }}</a></font>
                            </td>
                        </tr>
                        <tr bgcolor="#EAF2FA">
                            <td>
                                <font style="font-family:sans-serif;font-size:12px"><strong>Contact Number</strong></font>
                            </td>
                        </tr>
                        <tr bgcolor="#FFFFFF">
                            <td>
                                <font style="font-family:sans-serif;font-size:12px">{{ $phone_number }}</font>
                            </td>
                        </tr>
                        <tr bgcolor="#EAF2FA">
                            <td>
                                <font style="font-family:sans-serif;font-size:12px"><strong>Message</strong></font>
                            </td>
                        </tr>
                        <tr bgcolor="#FFFFFF">
                            <td>
                                <font style="font-family:sans-serif;font-size:12px">{{ $desc }}</font>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>