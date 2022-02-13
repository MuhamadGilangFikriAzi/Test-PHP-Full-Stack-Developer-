
var n = prompt();
var arr =[];
for (let i = 0; i < n; i++) {    
    arr.push(prompt());
}

var arrInv = [];
const inventoryList = {    
    add : (name) => {
        let indexRemove = arrInv.indexOf(name);
        if (indexRemove == -1) {
            arrInv.push(name);    
        } else {
            arrInv.splice(indexRemove, 1);
            arrInv.push(name);    
        }
    },

    remove : (name) => {
        let indexRemove = arrInv.indexOf(name);
        if (indexRemove != -1) {
            arrInv.splice(indexRemove, 1);
        }
    },

    getList : () => {    
        return arrInv.reverse().slice(0, 10).join(', ');
    }
}


for (let i = 0; i < arr.length; i++) {
    let arrTemp = arr[i].split(" ");
    let order = arrTemp[0];
    
    if (order == 'add' && arrTemp[1] != '') {
        inventoryList.add(arrTemp[1]);
    }

    if (order == 'remove' && arrTemp[1] != '') {
        inventoryList.remove(arrTemp[1]);
    }

    if (order == 'getList') {
        console.log(inventoryList.getList());
    }
}


