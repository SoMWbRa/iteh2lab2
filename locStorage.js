function onChange(elId) {
    let el = document.getElementById(elId);
    var key = el.options[el.selectedIndex].text;

    if(elId === 3 || elId === 4) {
        let el3 = document.getElementById(3);
        let el4 = document.getElementById(4);
        let key3 = el3.options[el3.selectedIndex].text;
        let key4 = el4.options[el4.selectedIndex].text;

        key = key3 + key4;
        console.log(key)
    }

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
