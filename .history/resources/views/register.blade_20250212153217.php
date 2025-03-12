<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webshop</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body id="register">
    #auth>.bg
    {
        display: grid;
        grid-template-rows: auto 0.95fr auto;
        grid-template-columns: 1fr;
        grid-column: 2;
        background-color: whitesmoke;
    }

    #auth main
    {
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: auto 1fr;
        justify-self: center;
        align-self: center;
        width: 500px;
        height: 400px;
        background-color: rgb(231, 231, 231);
        border-radius: 10px;
        border: 2px rgba(215, 215, 215, 0.552) solid;
    }

    .pageTitle
    {
        font-size: 2em;
        font-family: "WorkSans";
    }

    #authForm
    {
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: 1fr;
        align-content: center;
        justify-items: center;
    }

    #authFormContainer
    {
        grid-row: 1;
        width: 80%;
    }

    .authInput
    {
        box-sizing: border-box;
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: auto 1fr;
        width: 100%;
        height: 50px;
        background-color: white;
        border-radius: 10px;
        border: 2px rgba(138, 138, 138, 0.552) solid;
        margin-top: 10px;
        margin-bottom: 10px;
        justify-self: center;
        overflow: hidden;
    }

    .authInput *
    {
        padding: 0;
        margin: 0;
        margin-left: 5px;
        border: 0;
        border-radius: 10px;
        text-align: left;
        font-family: "WorkSans";
    }

    .authInput input:focus
    {
        outline: none;
        border: none;
    }

    .authInput label
    {
        margin-top: 5px;
        font-size: 0.9em;
    }

    .authInput input
    {
        color: black;
        font-size: 1em;
    }

    #auth button
    {
        box-sizing: border-box;
        grid-row: 1 / -1;
        width: 100%;
        height: 50px;
        padding: 0;
        margin: 0;
        background-color: rgb(55, 55, 55);
        color: white;
        font-size: 1em;
        border-radius: 10px;
        text-align: center;
        border: 2px black solid;
    }

    #signInOptions
    {
        width: 100%;
        max-width: 40%;
        justify-self: center;
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: auto 1fr;
    }

    #auth p
    {
        color: rgb(79, 79, 79);
        font-size: 15px;
        padding: 0;
        margin: 0;
    }

    .signInOption
    {
        grid-row: 2;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        max-width: 100px;
        height: auto;
    }

    .signInOption>img
    {
        grid-row: 2;
        width: 100%;
        max-width: 50px;
        height: auto;
        aspect-ratio: 16/10;
    }
</body>
<script>
    window.addEventListener('scroll', function() {
        const element = document.querySelector('.downArrow');
        const productSections = document.querySelector('.productSection')

        if (window.scrollY > 500) {
            element.classList.add('hidden')
            element.classList.remove('show')
        } else {
            element.classList.remove('hidden')
            element.classList.add('show')
        }
    })
</script>
</html>


