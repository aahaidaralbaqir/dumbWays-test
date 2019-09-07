const count_handshake = (num) => {
   const count = num;
   var handshake = 0;
   for(let i = 0; i < count; i++){
      for(let j  = i + 1; j < count; j++){
         handshake += 1;
      }
   }
   console.log(handshake);
   return handshake;
}
count_handshake(3);
count_handshake(6);