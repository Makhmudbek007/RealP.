<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.css">
    <title>JADVAL</title>
</head>
<style>
    table, th, td {
      border:1px solid black;
      padding: 10px;
    }
    
    .mas{
        background-color: red;
        color: wheat;
    }.qil{
        background-color: green;
        color: wheat;
    }
    details{
        cursor: pointer;
        border: 1px solid black;
        padding: 10px;
        margin: 2px;
    }
    details>summary>b{
        color: red;
        font-size: 20px;
    }
    .footer_back{
        text-decoration: none;
        padding: 5px 15px;
        border: 1px solid black;
        margin-top: 5vh;
    }
    .footer_div{
        display: flex;
        justify-content: end;
        margin-top: 15px;
    }
    .change_div{
        display: flex;
        justify-content: end;
        margin-top: 15px;
    }
    .change_div>div{
        margin: 0 5px;
    }
    .fa-solid{
        font-size: 20px;
        transition: all 0.3s;
    }
    .fa-sharp:hover{
        color: red;
        font-size: 25px;
        transition: all 0.3s;
    }
    .fa-pencil:hover{
        color: yellow;
        font-size: 25px;
        transition: all 0.3s;
    }
    .tb1_row1_tulov_non{
        display: none;
    }
    .tb1_row1_tulov_have{
        display: block;
    }
    </style>
<body>
    <details open>
        <summary> 
            <b>Guruh-1</b><br>
            3ta o'quvchi
        </summary>
        <table >
            <tr>
                <th>N/n</th>
                <th>Ism</th>
                <th>Telefon raqam-1</th>
                <th>Telefon raqam-2</th>
                <td>To'lov</td>
                <td>Sana</td>
            </tr>
            <tr>
                <td id="Table_1">1</td>
                <td id="tb1_row1_td_name"><span id="tb1_row1_name">Islom</span></td>
                <td id="tb1_row1_td_Num1"><a href="tel:+998910000000" id="tb1_row1_num1">+998910000000</a></td>
                <td id="tb1_row1_td_Num2"><a href="tel:+998910000000" id="tb1_row1_num2">+998910000000</a></td>
                <td class="mas" id="tb1_row1_qil_mas">None
                    <select name="Tulov" id="tb1_row1_tulov">
                        <option id="not" value="0">None</option>
                        <option id="have" value="1">Qabul qilingan</option>
                    </select>
                </td>
                <td>23-iyun - 23-iyul 2023y</td>
            </tr>
        </table>
        <div class="change_div">
            <div onclick="change()">
                <i class="fa-solid fa-pencil" id="pencilChange"></i>
            </div>
            <div>
                <i class="fa-sharp fa-solid fa-trash" id="iconDelete"></i>
            </div>
            <div>
                <button onclick="save()">Сохранить</button>
            </div>
        </div>
    </details>
    <footer class="footer_div">
        <a href="C:\Users\hp\Desktop\Real Project\index.html" class="footer_back">Back</a>
    </footer>
    <!-- <input type="text"> -->
    <script>
        function change() {
            // *********************************     Gruh-1    *****************************************
            // *********************************Table 1 - Row 1*****************************************
            // *********************************      Name     *****************************************
            tb1_row1_name = document.getElementById("tb1_row1_name").innerHTML;
            document.getElementById("tb1_row1_td_name").innerHTML = `<input type="text" id="tb1_row1_nameInp" maxlength="15">`;
            document.getElementById("tb1_row1_nameInp").value = tb1_row1_name;
            // *********************************      Num1     *****************************************
            let tb1_row1_num1 = document.getElementById("tb1_row1_num1").innerHTML;
            document.getElementById("tb1_row1_td_Num1").innerHTML  = `<input type="text" id="tab1_inpNum_1" maxlength="13">`
            document.getElementById("tab1_inpNum_1").value = tb1_row1_num1;

            // *********************************      Num2     *****************************************

            let tb1_row1_num2 = document.getElementById("tb1_row1_num2").innerHTML;
            document.getElementById("tb1_row1_td_Num2").innerHTML = `<input type="text" id="tab1_inpNum_2" maxlength="13">`
            document.getElementById("tab1_inpNum_2").value = tb1_row1_num2;
            // *********************************      To'lov     ****************************************
            var element = document.getElementById("tb1_row1_tulov");
            element.classList.add(".tb1_row1_tulov_have");
        }
        function save() {
            // *********************************     Gruh-1    *****************************************
            // *********************************Table 1 - Row 1*****************************************
            // *********************************      Name     *****************************************
            let tb1_row1_nameInp = document.getElementById("tb1_row1_nameInp").value;
            document.getElementById("tb1_row1_td_name").innerHTML  = `<span id="tb1_row1_name">`+tb1_row1_nameInp+`</span>`
            // *********************************      Num1     *****************************************
            let tb1_row1_num1 = document.getElementById("tab1_inpNum_1").value;
            document.getElementById("tb1_row1_td_Num1").innerHTML  = `<a href="tel:`+tb1_row1_num1+`" id="tb1_row1_num1">`+tb1_row1_num1+`</a>`
            
            // *********************************      Num2     *****************************************
            
            let tb1_row1_num2 = document.getElementById("tab1_inpNum_2").value;
            document.getElementById("tb1_row1_td_Num2").innerHTML  = `<a href="tel:`+tb1_row1_num2+`" id="tb1_row1_num2">`+tb1_row1_num2+`</a>`

            // *********************************      To'lov     ****************************************
            if (document.getElementById("tb1_row1_tulov").value == 1) {
                var element = document.getElementById("tb1_row1_qil_mas");
                element.classList.remove("mas");
                element.classList.add("qil");
                document.getElementById("tb1_row1_qil_mas").innerHTML = `Qabul qilingan
                    <select id="tb1_row1_tulov">
                        <option id="not" value="0">None</option>
                        <option id="have" value="1" selected>Qabul qilingan</option>
                    </select>`;
            }else if(document.getElementById("tb1_row1_tulov").value == 0){
                var element = document.getElementById("tb1_row1_qil_mas");
                element.classList.remove("qil");
                element.classList.add("mas");
                document.getElementById("tb1_row1_qil_mas").innerHTML = `None 
                    <select id="tb1_row1_tulov">
                        <option id="not" value="0" selected>None</option>
                        <option id="have" value="1">Qabul qilingan</option>
                    </select>`;
            }
        }
    </script>
</body>
</html>