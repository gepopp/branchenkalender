<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
    <table border="0" cellpadding="0" cellspacing="0" role="presentation">
        <tr style="margin: 0px">
            <td style="max-width: 150px; margin-bottom: 0px" align="center">
                <img src="{{ url(asset('favicon.png')) }}   " class="logo" alt="branchenkalender logo" width="50" height="50">
            </td>
        </tr>
        <tr style="margin: 0px">
            <td class="header" style="margin: 0px">
                <h2 style="font-width: bold; color: #4b5563; font-size: 24px; text-align: center; margin:0px;">{{ $slot }}</h2>
                <p style="margin: 0px; text-align: center; font-size: 12px; color: #4b5563;">never miss <span style="color:#AA1B1B">your</span> network</p>
            </td>
        </tr>
    </table>
</a>
</td>
</tr>
