window.onload = function () {
    let input = document.getElementById("inp");
    let get = document.getElementById("get");
    let set = document.getElementById("set");
    let tagPrintAnswer = document.getElementById("answer");

    const renderTag = (element, data) => {
        element.innerHTML = `<span class = 'result'>${data}</span>`;
    }

    const getLast = (element, data) => {
        element.value = data['INPUT'];
        element.oninput();
    }

    input.oninput = async function() {
        let form = new FormData();
        form.set("method", "find");
        form.set("inp", input.value);
        let answer = await fetch('handler.php', { 
            method: 'POST',
            body: form });
        await answer.json()
            .then((data)=> {
                renderTag(tagPrintAnswer, data);
            })
            .catch((error) => {
                renderTag(tagPrintAnswer, "Error!")
            })
    };

    set.onclick = async function() {
        let form = new FormData();
        form.set("method", "set");
        form.set("inp", input.value);
        let answer = await fetch('handler.php', { 
            method: 'POST',
            body: form });
    };

    get.onclick = async function() {
        let form = new FormData();
        form.set("method", "get");
        form.set("get", "1");
        let answer = await fetch('handler.php', { 
            method: 'POST',
            body: form });
        await answer.json()
            .then((data)=> {
                getLast(input, data);
            })
            .catch((error) => {
                renderTag(tagPrintAnswer, "Error!")
            })
    };
}