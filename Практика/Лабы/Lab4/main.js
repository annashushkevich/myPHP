window.onload = function(){
    let inp = document.getElementById("inp");
    let tagPrintAnswer = document.getElementById("answer");

    const renderTag = (element, data) => {
        element.innerHTML = `<span class = 'result'>${data}</span>`;
    }

    inp.onkeyup = async (arg) => {
        arg.preventDefault();
        let answer = await fetch('index.php', { method: 'POST', body: new FormData(FormElem)});
        await answer.json()
            .then((data)=> {
                renderTag(tagPrintAnswer, data);
            })
            .catch((error) => {
                renderTag(tagPrintAnswer, "Error!")
            })
        };
}
