// Sử dụng để load ảnh khi chọn bằng input files
function readUrl(input)
{
    if(input.files && input.files[0])
    {
        var reader = new FileReader();
        reader.onload = function (e)
        {
            $('#blah').attr('src',e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
// Tạo ra thêm checkbox size trong form
function addSizeNumberCheckBox()
{
    var numberSize = document.createElement('span');
    var x = document.createElement("INPUT");
    var inputNumber = document.getElementById("numberChoose");
    var notice = document.getElementById("noticeCheckBoxSize");
    x.setAttribute("type","checkbox");
    x.value = inputNumber.value;
    x.name = "size[]";
    x.className = "inputCheckbox";
    numberSize.innerHTML = inputNumber.value;
    var element = document.getElementById("boxCheckBox");
    var countElement = document.getElementsByClassName("inputCheckbox");
    var element_child = document.getElementsByClassName("inputCheckbox")[countElement.length-1];
    
        inputNumber.value = "";
        element.insertBefore(numberSize, element_child);
        element.insertBefore(x, element_child);
}
// Tạo ra thêm checkbox color
function addColorCheckBox()
{
    var nameColor = document.createElement('span');
    var x = document.createElement("INPUT");
    var inputColor = document.getElementById('nameColor');
    x.setAttribute("type","checkbox");
    x.value = inputColor.value;
    x.name = "color[]";
    x.className = "inputCheckbox2";
    nameColor.innerHTML = inputColor.value;
    var notice = document.getElementById("noticeCheckBoxColor");
    var element = document.getElementById("boxCheckBox2");
    var countElement = document.getElementsByClassName("inputCheckbox2");
    var element_child = document.getElementsByClassName("inputCheckbox2")[countElement.length-1];
        inputColor.value = "";
        element.insertBefore(nameColor, element_child);
        element.insertBefore(x, element_child);
  
}