<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoption Chatbot</title>
    <link rel="stylesheet" href="./dist/output.css">
    <link rel="stylesheet" href="./src/custom.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="font-inter scroll-smooth">
    <div class="p-3 bg-primary">
        <h2 class="text-xl text-white">
            Welcome to Animal Adoption and Donation Chat bot, we hope you will enjoy and have a good experience!
        </h2>
    </div>
    <header class="flex justify-between items-center py-2 px-8 lg:px-16">
        <div>
            <img src="./assets/images/logo.png" alt="logo">
        </div>
        <nav>
            <ul class="flex items-center gap-8 uppercase font-inter font-medium">
                <li>
                    <a href="javascript:void(0)">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#about">
                        About
                    </a>
                </li>
                <li>
                    <a href="#animals">
                        Our Animals
                    </a>
                </li>
                <li>
                    <a href="#contact">
                        Contact
                    </a>
                </li>
                <li>
                    <a href="logout.php"
                        class="bg-primary px-8 py-4 text-center uppercase border-[2px]  text-white rounded-md hover:bg-transparent hover:border-primary hover:border-[2px] hover:text-primary">
                        Log out
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <section class="bg-hero-bg min-h-screen bg-center bg-cover bg-no-repeat py-10 px-8 lg:px-16">
        <div class="flex justify-center items-start flex-col h-screen">
            <h1 class="text-white text-3xl font-[700] mb-3 md:text-4xl lg:text-6xl">
                Save Animals of Love and <br>
                Light - Save All
            </h1>
            <p class="text-white">Save Animals of Love and Light (Save ALL) fights for animal welfare, rights and
                protection.</p>
        </div>
        <!-- <div id="chatbot" class="bg-white p-6 rounded-lg shadow-lg flex relative">
            <div id="chat-content" class="flex-grow">
            </div>
            <div id="chat-buttons" class="ml-4">
                <p>Hello, I'm the adoption and donation
                    chatbot, how can I help you?</p>
                <button onclick="learnAboutAdoption()"
                    class="bg-blue-500 text-white px-4 py-2 rounded-full focus:outline-none">Learn about
                    adoption</button>
                <button onclick="learnAboutDonation()"
                    class="bg-green-500 text-white mt-2 px-4 py-2 rounded-full focus:outline-none">Learn about
                    donation</button>
            </div>
        </div> -->
        <div id="chatBox"
            class="shadow-xl bg-white p-5 rounded-lg hidden fixed bottom-24 right-[90px] overflow-auto h-[380px]">
            <div class="bg-shade-green p-3 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl w-full">
                <div id=" botMsg" class="mb-10">
                    <p class="text-white">Hello, I'm the adoption and donation <br>
                        chatbot, how can I help you?</p>
                </div>
                <div class="grid gap-3">
                    <button id="adoption" class="bg-shade-gray w-[228px] text-left p-3">
                        Learn about adoption
                    </button>
                    <button id="donation" class="bg-shade-gray w-[228px] text-left p-3">
                        Learn about donation
                    </button>
                </div>
            </div>
            <div id="appendedBtn" class="flex justify-end items-end"></div>
            <div id="responseMsg" class="hidden bg-shade-green p-3 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl w-full">
            </div>
            <div id="yesOrNoOption"
                class="hidden bg-shade-green p-3 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl w-full mt-5">
                <p class="text-white mb-10">
                    Was this helpful?
                </p>
                <div class="flex gap-3">
                    <button id="yesBtn" class="bg-shade-gray w-[82px] text-center p-3">
                        YES
                    </button>
                    <button id="noBtn" class="bg-shade-gray w-[82px] text-center p-3">
                        NO
                    </button>
                </div>
            </div>
            <div id="appendedYesBtn" class="flex justify-end items-end"></div>
            <div id="responseMsg02"
                class="hidden bg-shade-green p-3 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl w-full">
                <div class="response-btn-02 hidden gap-3">
                    <button id="adoption02" class="bg-shade-gray w-[228px] text-left p-3">
                        Learn about adoption
                    </button>
                    <button id="donation02" class="bg-shade-gray w-[228px] text-left p-3">
                        Learn about donation
                    </button>
                </div>
            </div>
            <div id="appendedBtn02" class="flex justify-end items-end"></div>
            <div id="responseMsg03"
                class="hidden bg-shade-green p-3 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl w-full"></div>
            <div id="yesOrNoOption03"
                class="hidden bg-shade-green p-3 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl w-full mt-3">
                <p class="text-white mb-10">
                    Was this helpful?
                </p>
                <div class="flex gap-3">
                    <button id="yesBtn04" class="bg-shade-gray w-[82px] text-center p-3">
                        YES
                    </button>
                    <button id="noBtn04" class="bg-shade-gray w-[82px] text-center p-3">
                        NO
                    </button>
                </div>
            </div>
            <div id="appendedYesBtn04" class="flex justify-end items-end"></div>
            <div id="responseMsgUnderDonation"
                class="hidden bg-shade-green p-3 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl w-full"></div>
            <div id="appendedNoBtn" class="flex justify-end items-end"></div>
            <div id="responseMsg04"
                class="hidden bg-shade-green p-3 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl w-full"></div>
            <div id="responseMsg05"
                class="hidden bg-shade-green p-3 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl w-full my-5">
                <button id="howToAdoptBtn" class="bg-shade-gray w-[228px] text-left p-3">
                    How can I adopt from
                    your organization?
                </button>
            </div>
            <div id="howToAdoptAppend" class="flex justify-end items-end">
            </div>

            <div id="responseMsgUnderDonationIfNo"
                class="hidden bg-shade-green p-3 mb-5 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl w-full"></div>
            <div id="responseMsgDonationProcess"
                class="hidden bg-shade-green p-3 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl w-full"></div>

            <div id="yesOrNoOptionAdoptProcess"
                class="hidden bg-shade-green p-3 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl w-full mt-3">
                <p class="text-white mb-10">
                    Was this helpful?
                </p>
                <div class="flex gap-3">
                    <button id="yesBtnAdoptProcess" class="bg-shade-gray w-[82px] text-center p-3">
                        YES
                    </button>
                    <button id="noBtnAdoptProcess" class="bg-shade-gray w-[82px] text-center p-3">
                        NO
                    </button>
                </div>
            </div>
            <div id="appendedYesAdoptProcess" class="flex justify-end items-end"></div>
            <div id="responseMsgYesAdoptProcess"
                class="bg-shade-green hidden p-3 mb-5 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl w-full"></div>
        </div>
        <div class="fixed bottom-6 right-6 cursor-pointer" id="chatBotIconBtn">
            <img src=" ./assets/images/chatbot-icon.png" alt="chatbot icon img" class="w-20">
        </div>
    </section>
    <!-- about section -->
    <section class="py-10 px-8 lg:px-16 bg-blue-50" id="about">
        <div class="grid grid-cols-1 gap-10 md:gap-0 md:grid-cols-2 lg:grid-cols-3">
            <div class="border-l-4 border-black p-5">
                <div class="mb-5">
                    <h2 class="text-shade-gray font-semibold text-2xl">
                        ABOUT SALLSA
                    </h2>
                </div>
                <h3>
                    Fights for animal welfare, rights and protection.
                </h3>
            </div>
            <div class="border-l-4 border-black flex items-center p-5">
                <h2>
                    SALLSA is Non-Governmental Organization (NGO)
                </h2>
            </div>
        </div>
        <div class="grid grid-cols-1 mt-20 gap-10 md:grid-cols-2 lg:grid-cols-3">
            <div class="border-l-4 border-black flex items-center bg-white p-5">
                <p>
                    This group started as the Efforts to Save 20 Dogs on Death Row on Dec. 1, 2013.We banded together
                    to save 20 dogs due for euthanasia Nov. 29., 2013 at the QuezonCity Pound in Metro Manila,
                    Philippines. We wereable to get a hold order from the Office of the CityMayor for one week to give
                    us time to get the dogs and . save them from being killed.
                </p>
            </div>
            <div class="border-l-4 border-black flex items-center bg-white  p-5">
                <p>
                    Save ALL has spoken in pet events and in a university about responsible pet ownership, among
                    othersSave ALL also fed dogs in two pounds in 2014: Sundays for Pasig pound dogs and every day for
                    six weeks at the Cainta pound for 88 dogs.Save ALL officers and admins feed strays regularly in
                    different parts of Metro Manila and parts ofLuzon, sharing some of the donated dog food or cat
                    food to the stray animals.Save ALL helps the Sunday Pets page of Manila Standard promote animal
                    welfare messages such as adopt, dont shop, spay or neuter your pets, and be kind to animals
                    through tories on pets and proper care.
                    Save ALL has also held 12 spy-neuter programs
                    wherein at least 300 dogs and cats have been
                    "fixed" to help control animal population.
                </p>
            </div>
            <div class="border-l-4 border-black flex items-center bg-white  p-5">
                <p>
                    Save ALL sent food to affected dogs and cats in Marawi during the bloody siege with the hep of
                    Senator Nancy Binay.Save ALL asked senator Binay to help include animals in disaster preparation
                    and management plan of the government after Taal's eruption last January, 2020. Save ALL also
                    helped rescue stranded dogs and cats in the affected areas in Batangas, and fed dogs and cats in
                    danger zones around Taal. Save ALL continued feeding strays during the pandemic and still feeds
                    the homeless dogs and cats to this day. It also provides and shares dog food and cat food to
                    individual stray feeders whenever we have extra which is now becoming seldom. Please donate dog
                    food and cat food for our continuous Feed The Strays project.
                </p>
            </div>
        </div>
    </section>
    <!-- animals section -->
    <section class="py-10 px-8 lg:px-16" id="animals">
        <div class="border-l-4 border-black p-5">
            <div class="mb-5">
                <h2 class="text-shade-gray font-semibold text-2xl">
                    OUR ANIMALS
                </h2>
            </div>
            <h3>
                If you want to see more, just click the link:
                <a href="https://www.facebook.com/saveanimalsofloveandlightPH/photos" class="underline text-black"
                    target="_blank">
                    Save Animals of Love and Light - Save ALL
                </a>
            </h3>
        </div>
        <figure class="mt-10">
            <img src="./assets/images/animals.png" alt="animal group">
        </figure>
    </section>
    <!-- contact section -->
    <section class="py-10 px-8 lg:px-16" id="contact">
        <div class="border-l-4 border-black p-5">
            <div class="mb-5">
                <h2 class="text-shade-gray font-semibold text-2xl">
                    OUR CONTACT
                </h2>
            </div>
            <h3>
                Please do contact us in:
            </h3>
            <div class="flex items-center gap-5 mt-5">
                <a href="mailto:daycarlos28@yahoo.com" class="underline text-black">
                    <img src="./assets/images/email-icon.png" alt="email icon" class="h-10">
                </a>
                <a href="https://www.facebook.com/messages/t/1436948669914501" class="underline text-black"
                    target="_blank">
                    <img src="./assets/images/messenger-icon.png" alt="messenger icon" class="h-10">
                </a>
            </div>
        </div>
    </section>
    <!-- chatbot  -->
    <script src="./src/script.js"></script>


    <script>
    // function learnAboutAdoption() {
    //     const chatContent = document.getElementById('chat-content');
    //     chatContent.innerHTML =
    //         '<p class="text-left opacity-0 animate-fade-in">Animal adoption involves providing a home and care for animals in need, typically from shelters or rescue organizations. Adopting a pet is a compassionate choice that benefits both the animal and the adopter, creating a bond that enriches lives on both sides.</p>';
    //     moveButtonToBottomRight();
    //     setTimeout(() => {
    //         document.querySelector('.animate-fade-in').classList.remove('opacity-0');
    //     }, 100);
    // }

    // function learnAboutDonation() {
    //     const chatContent = document.getElementById('chat-content');
    //     chatContent.innerHTML =
    //         '<p class="text-left opacity-0 animate-fade-in">Information about donation goes here.</p>';
    //     moveButtonToBottomRight();
    //     setTimeout(() => {
    //         document.querySelector('.animate-fade-in').classList.remove('opacity-0');
    //     }, 100);
    // }

    // function moveButtonToBottomRight() {
    //     const chatButtons = document.getElementById('chat-buttons');
    //     chatButtons.classList.remove('ml-4');
    //     chatButtons.classList.add('absolute', 'bottom-0', 'right-0', 'mr-4', 'mb-4');
    // }
    </script>

    <!-- tool tip -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>

    <script>
    tippy('#showAllQuestions', {
        content: 'Show all questions',
        placement: 'left',
    });
    </script>


</body>

</html>