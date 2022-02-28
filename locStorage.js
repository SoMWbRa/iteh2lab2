function onChange(elId) {
    let el = document.getElementById(elId);
    let key = el.options[el.selectedIndex].text;
    var item = localStorage.getItem(key);
    var table = document.getElementById('showTable');

    if(item === null){
        table.innerHTML = "<tbody><tr><td>Empty</td></tr></tbody>"
        return;
    }

    document.getElementById('showTable').innerHTML=item;
}

function onLoad() {
    var table = document.getElementById('table');
    if(table === null) return;
    var key=document.getElementById('key').value;
    localStorage.setItem(key, table.innerHTML);
}
