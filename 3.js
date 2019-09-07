const drawImage = (num) => {
   if(num % 2 !== 0){
      let output =[];
      let row ="";
      for(let i = 0 ; i < num ; i++){
         for(let  j = 0 ; j < num ; j++){
            row += "*";
         }
         output.push(row);
      }
      console.log(output);
   }else{
      console.log(`angka harus ganjil`)
   }
}

drawImage(5);