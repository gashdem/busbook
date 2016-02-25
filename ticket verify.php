<!DOCTYPE html>
<html>

<head>
<style>
h1 {
    border-bottom: 3px solid #cc9900;
    color: #996600;
    font-size: 30px;
}
table, th , td  {
    border: 1px solid grey;
    border-collapse: collapse;
    padding: 5px;
}
table tr:nth-child(odd)	{
    background-color: #f1f1f1;
}
table tr:nth-child(even) {
    background-color: #ffffff;
}
</style>
</head>

<body>

<h1>Customers</h1>
<div id="id01"></div>
<div id="id02">
            <form action="tickets_mysql.php" method="post">
                <fieldset>
                    <legend>
                        By Name
                    </legend>
                    <input type="text" name="name_txtbox" maxlength="30" placeholder="Name..." />
                    <input type="submit" name="VerifyName" value="Verify" />
                    <p id="out_p"></p>
                </fieldset>
                
                <fieldset>
                    <legend>
                        By ID
                    </legend>
                    <input type="text" name="id_txtbox" maxlength="30" placeholder="Id..." />
                    <input type="submit" name="VerifyId" value="Verify" />
                    <p id="out_p"></p>
                </fieldset>
                <fieldset>
                    <legend>
                        By Phone
                    </legend>
                    <input type="text" name="phone_txtbox" maxlength="30" placeholder="Phone..." />
                    <input type="submit" name="VerifyPhone" value="Verify" />
                    <p id="out_p"></p>
                </fieldset>
            </form>
        </div>


</body>
</html>