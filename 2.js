const isValidPassword = (str) => {
   const patternForLowercase = /[a-z]/g;
   const patternForUppercase = /[A-Z]/g;
   const patternForNumber = /[0-9]/g;
   const patternForSymbol = /[^a-zA-Z\d]/g;
   if(str.match(patternForLowercase) && str.match(patternForUppercase) && str.match(patternForNumber) && str.match(patternForSymbol) && str.length >= 8) {
      console.log('true');
   }else{
      console.log('false');
   }
}
isValidPassword('ssdga_A7');
isValidPassword('123Qwer_');
isValidPassword('SUper&&4');
isValidPassword('123Qwer_');
isValidPassword('123qwer_');