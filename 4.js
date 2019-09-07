function hitungKembalian(uangTerpakai,uangBayar){
   const stokKembalian = [500,1000,2000,5000,10000,20000,50000];
   var kembalian = uangBayar - uangTerpakai;
   let len = stokKembalian.length;
   let jumlah = 0;
   let ttt = [];
   for(let i = 0; i < len; i++ ) {
     if( kembalian -= stokKembalian[i] !== 0 ) {
         ttt.push(stokKembalian[i]);
     }else{
        return false;
     }
   }
   console.log(ttt);
}
hitungKembalian(15500,50000);