<HTML>
<HEAD>
<META NAME="GENERATOR" Content="text/html"; charset="utf-8">

<TITLE>JNU wiki Login</TITLE>
<style>
    h1{
        text-align:center;
        font-size:80px;
        color:green;
    }
    h2{
        text-align:center;
        font-size:40px;
        color:cornflowerblue;
    }
    form{
          text-align:center;
    }
    .button{
        width:500px;
        height:60px;
        font-size:25px;
        background-color:cyan;
        border:3px solid skyblue;
    }
    .button>a{
        display:block;
        line-height:50px;
        position:center;
    }
    a{
      text-decoration: none;
    }
</style>
</HEAD>
<BODY>
    <br/><br/><br/><br/>
    <a href="Homepage.php"><h1>JNU wiki</h1></a>
    <h2>Login</h2>
    <hr/>
    <form>
        <input name="id" type="text" placeholder="ID" style="width:500px; height:50px; border:3px solid blue; font-size:20px"/>
        <br/>
        <input name="pw" type="password" placeholder="Password" style="width:500px; height:50px; border:3px solid blue; font-size:20px"/>
        <br/>
        <input type="submit" value="Login" style="width:500px; height:30px; color:orangered; background-color:greenyellow;"/>
        <center>
            <div class="button">
                <a href="Join.php" style="text-align:center; text-decoration:none; color:cornflowerblue; position:center;">Go to New join</a>
            </div>
        </center>

    </form>
</BODY>
</HTML>