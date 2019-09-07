/*

*/
function getBiodata() {

   const biodata = {
     name: "Ahmad haidar albaqir",
     address: "kp.mekarjati kec.karawang barat kab.karawang",
     hobbies: ["Playing footbal"],
     is_married: false,
     school: {
       "name": "SMKN 1 KARAWANG",
       "year_in": 2016,
       "year_out": 2019,
       "major": null
     },
     skills: [{
         "skill_name": "javascript",
         " level ": "advanced"
       },
       {
         "skill_name": "css",
         " level ": "advanced"
       },
       {
         "skill_name": "node js",
         " level ": "beginner"
       }
     ]
   };
 
   const parsedBiodata = JSON.stringify(biodata);
   console.log(parsedBiodata);
   return parsedBiodata;
 }
 getBiodata();