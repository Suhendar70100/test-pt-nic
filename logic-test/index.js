function testnci(){
    var x = 1;
    var y = 2;

    console.log("x awal = ", x);
    console.log("y awal = ", y);

    x = x + y;
    y = x - y;
    x = x - y;

    console.log("x final = ", x);
    console.log("y final = ", y);
}

testnci()
