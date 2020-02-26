
            <!DOCTYPE html>
            <html>

            <head>
                <h2 align="center"> Login area</h2>
                <style>
                    td,h2{color: #fff;}
                    td{font-size: 18px;}
                    #level{width: 200px;height: 30px;margin-top: 10px;}
                    table{border: 1px solid #ddd;padding: 5% 15% 5% 15%;}
                </style>
            </head>
            <body style=" width:100%;background-color:#373e4a">
            <div id="login-main" align="center">
                <form action="process.php" method="POST" enctype="multipart/form-data">
                    <table>
                        <tr><td>Email/Username: </td>
                            <td><input style="height:30px;width:200px;margin-bottom: 20px;" type="text" name="name" id="name" placeholder="User name"></input></td></tr>

                        <tr><td>Password: </td>
                            <td><input style="height:30px;width:200px" type="password" name="password" id="password" placeholder="Your Password"></input></td></tr><br>
                        <tr><td></td>

                        </tr>
                        <tr><td colspan="2">
                                <div><input style="margin-top: 20px;height:30px;width:100px" type="submit"  value="Log in"></input></div>
                            </td></tr>




                    </table>


                </form>

            </div >

            <footer>
                <div style="background-color: blueviolet;color: white; text-align: center"><h3> Developed by: Group 02</h3>
                </div>
            </footer>


            </body>
            </html>



