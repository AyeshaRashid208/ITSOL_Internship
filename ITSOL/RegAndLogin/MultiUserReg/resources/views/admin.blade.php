<x-app-layout>
    
    <div style = "background-color: rgb(15, 131, 121)"><h1 align='center'>
    Admin Dashboard
</h1></div>
<div>
    <form action="{{url('/addseller')}}" method="POST">
    <div style="background-color:rgb(61, 185, 154)">
            <table>
                
                <tr>
                    <h3 align='center'> Add seller</h3>
                </tr>
                <tr>
                    <td align="center">Name </td>
                    <div>
                        <td><input type="text" name="name"></td>
                    </div>
                </tr>
                <tr>
                    <td align="center">Email </td>
                    <div>
                        <td><input type="email" name="email"></td>
                    </div>
                </tr>
                <tr>
    
                    <td align="center">Password</td>
                    <div id="i2">
                        <td><input type="password" name="password"></td>
                    </div>
                </tr>
    
                <tr>
                    <td align="right"></td>
                    <td><input type="submit" style="background-color:rgb(12 147 135)" style="border-radius: 6px" style="font-weight: bold"></td>
                </tr>
                
    
            </table>
        </div>
    </form>
</div>
</x-app-layout>
