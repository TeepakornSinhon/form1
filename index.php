<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js"integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@600&display=swap" rel="stylesheet">
    <style>
        .background_area {
            background-color: bisque;
            width: 100%;
            margin-top: 100px;
            border-radius: 25px;
            padding: 100px;
            font-family: 'Mitr', sans-serif;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class = "container">
        <div class = "background_area">
            <h1 align = "center"> แบบฟอร์ม</h1>
            <form action="">            
                <div class="form-group">
                    <label for="Pid"></label>
                    <input type="text" class="form-control" id="Pid" placeholder="เลขบัตรประชาชน" >
                </div>  
                <div class="row ">
                    <div class = "col-md-2">
                        <div class="form-group">
                            <select class="form-control " aria-label="title" id= "title">
                                <option selected>คำนำหน้าชื่อ</option>
                                <option value="Mr">นาย</option>
                                <option value="Mrs">นาง</option>
                                <option value="Ms">นางสาว</option>
                            </select>
                        </div> 
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="ชื่อ" >
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="นามสกุล" >
                    </div>
                </div>
                <div class="row ">
                    <div class = "col-md-2">
                        <div class="form-group">
                            <select class="form-control " aria-label="Gender">
                                <option selected>เพศ</option>
                                <option value="male">ชาย</option>
                                <option value="female">หญิง</option>
                                <option value="N/A">ไม่ต้องการระบุ</option>
                            </select>
                        </div>   
                    </div>
                    <div class = "col-md-2">
                        <div class="form-group">
                            <select class="form-control "aria-label="religion">
                                <option selected>ศาสนา</option>
                                <option value="buddhism">พุทธ</option>
                                <option value="islam">อิสลาม</option>
                                <option value="christianity">คริสต์</option>                                
                                <option value="another">อื่นๆ</option>
                            </select>
                        </div>  
                    </div>
                    <div class = "col-md-2">
                        <input type="text" class="form-control" placeholder="บ้านเลขที่" >
                    </div>
                    <div class = "col-md-2">
                        <input type="text" class="form-control" placeholder="หมู่ที่" >
                    </div>
                    <div class = "col">
                        <input type="text" class="form-control" placeholder="ถนน" >
                    </div>
                </div>

                <div class="row "style="margin-top:15px">
                    <div class = "col-md-4" >
                        <input type="text" class="form-control" placeholder="ตำบล/แขวง" >
                    </div>
                    <div class = "col-md-4" >
                        <input type="text" class="form-control" placeholder="อำเภอ" >
                    </div>
                    <div class = "col-md-4">
                        <div class="form-group">
                            <select class="form-control "aria-label="province">
                                <option selected>จังหวัด</option>
                                <option value="Krabi">กระบี่</option>
                                <option value="Nakhonsithummarat">นครศรีธรรมราช</option>
                                <option value="Narathiwat">นราธิวาส</option>                                
                                <option value="Pattani">ปัตตานี</option>
                                <option value="Trang">ตรัง</option>
                            </select>
                        </div>  
                    </div>
                </div>
                <div class="row "style="margin-top:15px">
                    <div class = "col-md-4" >
                        <input type="text" class="form-control" placeholder="รหัสไปรษณีย์" >
                    </div>
                    <div class = "col-md-4" >
                        <input type="tel" class="form-control" placeholder="เบอร์โทรศัพท์บ้าน" >
                    </div>                    
                    <div class = "col-md-4" >
                        <input type="tel" class="form-control" placeholder="เบอร์โทรศัพท์มือถือ" >
                    </div>
                </div>
                <div class="row "style="margin-top:15px">
                    <div class = "col">
                        <div class="form-group">
                            <select class="form-control " aria-label="major">
                                <option selected>สาขาที่ชื่นชอบ</option>
                                <option value="ITD">เทคโนโลยีสารสนเทศและนวัตกรรมดิจิทัล </option>
                                <option value="IMI">นวัตกรรมสารสนเทศทางการแพทย์</option>
                                <option value="DCM">ดิจิทัลคอนเทนต์และสื่อ </option>                                
                                <option value="MTA">เทคโนโลยีมัลติมีเดีย แอนิเมชัน และเกม</option>
                                <option value="COMM">นิเทศศาสตร์ดิจิทัล</option>
                            </select>
                        </div>  
                    </div>
                </div>
                <center>
                    <input type="submit" value="Send" class= "btn btn-primary" id ="Datasubmit" style="margin-top:30px; background-color: white; color:black; width: 150px; height: 70px; font-size:28px"  />
                </center>
            </form>
        </div>
    </div>
    <script>
        function Data_click(){
            var Personal_id = $("#Pid").val();
            var data = "{";
            data += '"Personal_id":"' + $("#Pid").val() + '",'
            data += "}";

            console.log(JSON.parse(data));

        }

        $(() => {
            $("#Datasubmit").click(Data_click)
        });

    </script>
</body>
</html
