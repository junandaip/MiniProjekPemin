{
    var jsonText = 
    '{ "TOKO A" : [' +
    '{ "Nama":"Toko Barokah" },' +
    '{ "Owner":"Robi" },' +
    '{ "Produk": [' +
        '{ "Diapers": [' +
            '{ "Stok": 12},' +
            '{ "Harga" : 45000}]}' +
        '{ "Susu": [' +
            '{ "Stok": 23},' +
            '{ "Harga": 34000}]}' +
        '{ "Baju Bayi": [' +
            '{ "Stok": 10},' +
            '{ "Harga": 75000}]} ]}]}'; 
    JSON.parse(jsonText);
    console.log(myJson);
}