var kalimat="saya sangat senang belajar javascript";

let splitSentence = kalimat.split(" ")
let array = [ ];

splitSentence.forEach(kata => {
    array.push(kata)
})
console.log(array)