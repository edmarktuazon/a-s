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

    <?php require ('./includes/navbar.php') ?>

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
                    <p class="max-w-[273px] mb-10  w-full text-white">Great, glad I could help. Feel free to ask me any
                        additional questions.</p>
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
                class="hidden bg-shade-green p-3 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl w-full">
                <p class="max-w-[273px] w-full text-white">Great, glad I could help.
                    Thank you for visiting our chat bot. But if you have a question just type your question here.</p>
            </div>
            <div id="appendedNoBtn" class="flex justify-end items-end"></div>
            <div id="responseMsg04"
                class="hidden bg-shade-green p-3 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl w-full"></div>
            <div id="responseMsg05"
                class="hidden bg-shade-green p-3 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl w-full my-5">
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
            <div id="botResponse" class="flex flex-col items-end">
            </div>
            <div id="yesOrNoResponse"
                class="hidden bg-shade-green p-3 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl w-full mt-3">
                <p class="text-white mb-10">
                    Was this helpful?
                </p>
                <div class="flex gap-3">
                    <button id="yesBtnResponse" class="bg-shade-gray w-[82px] text-center p-3">
                        YES
                    </button>
                    <button id="noBtnResponse" class="bg-shade-gray w-[82px] text-center p-3">
                        NO
                    </button>
                </div>
            </div>
            <div class="my-5">
                <input type="text" placeholder="Enter your question here" class="border p-2">
                <button id="sendBtn" class="bg-shade-green p-2 text-white">Send</button>
            </div>
        </div>
        <div class="fixed bottom-6 right-6 cursor-pointer" id="chatBotIconBtn">
            <img src=" ./assets/images/chatbot-icon.png" alt="chatbot icon img" class="w-20">
        </div>
    </section>
    <!-- chatbot  -->
    <script src="./src/script.js"></script>
</body>

</html>