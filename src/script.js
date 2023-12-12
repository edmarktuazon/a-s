/** @format */

// open chat box
const chatBotIconBtn = document.querySelector("#chatBotIconBtn");
const chatBox = document.querySelector("#chatBox");

const openChatBox = () => {
	chatBox.classList.toggle("hidden");
};

chatBotIconBtn.addEventListener("click", openChatBox);

// append button to the bottom
document.addEventListener("DOMContentLoaded", function () {
	// adoption btn
	const adoptionBtn = document.querySelector("#adoption");
	const appendedBtn = document.querySelector("#appendedBtn");
	const responseMsg = document.querySelector("#responseMsg");

	const appendBtn = () => {
		const btn = document.createElement("div");
		btn.innerHTML = "Learn about adoption";
		btn.classList.add(
			"my-5",
			"bg-shade-gray",
			"w-[228px]",
			"text-right",
			"p-3",
			"rounded-tr-3xl",
			"rounded-tl-3xl",
			"rounded-bl-3xl",
			"w-full"
		);

		appendedBtn.appendChild(btn);

		adoptionBtn.classList.add("cursor-not-allowed");
		adoptionBtn.setAttribute("disabled", true);

		setTimeout(function () {
			const response = document.createElement("p");
			response.innerHTML =
				"Adoption is a process whereby a person assumes the parenting of another, usually a child, from that person's biological or legal parent or parents. Legal adoptions permanently transfer all rights and responsibilities, along with filiation, from the biological parent or parents.";
			response.classList.add("max-w-[273px]", "w-full", "text-white");

			responseMsg.appendChild(response);
			responseMsg.classList.remove("hidden");

			// Show Yes or No option after 8 seconds
			setTimeout(function () {
				yesOrNoOption.classList.remove("hidden");
			}, 3000);
		}, 2000);
	};

	adoptionBtn.addEventListener("click", appendBtn);

	// yes btn
	const yesBtn = document.querySelector("#yesBtn");
	const appendedYesBtn = document.querySelector("#appendedYesBtn");
	const responseMsg02 = document.querySelector("#responseMsg02");
	const responseBtn02 = document.querySelector(".response-btn-02");

	const appendYesBtn = () => {
		const btn = document.createElement("button");
		btn.innerHTML = "Yes";
		btn.classList.add(
			"my-5",
			"bg-shade-gray",
			"w-[228px]",
			"text-right",
			"p-3",
			"rounded-tr-3xl",
			"rounded-tl-3xl",
			"rounded-bl-3xl"
		);

		appendedYesBtn.appendChild(btn);
		appendedYesBtn.classList.add("cursor-not-allowed");
		appendedYesBtn.setAttribute("disabled", true);

		setTimeout(function () {
			const response = document.createElement("p");
			response.innerHTML =
				"Great, glad I could help. Feel free to ask me any additional questions.";
			response.classList.add("max-w-[273px]", "w-full", "text-white");

			responseMsg02.appendChild(response);

			responseMsg02.classList.remove("hidden");

			responseBtn02.classList.remove("hidden");
			responseBtn02.classList.add("grid");

			// Show Yes or No option after 8 seconds
			setTimeout(function () {
				yesOrNoOption.classList.remove("hidden");
			}, 3000);
		}, 2000);
	};

	yesBtn.addEventListener("click", appendYesBtn);
});

// donation btn
document.addEventListener("DOMContentLoaded", function () {
	const donation = document.querySelector("#donation");

	const donationBtn = document.querySelector("#donation02");
	const appendedBtn02 = document.querySelector("#appendedBtn02");
	const responseMsg03 = document.querySelector("#responseMsg03");
	const yesOrNoOption03 = document.querySelector("#yesOrNoOption03");

	const appendBtn = () => {
		const btn = document.createElement("button");
		btn.innerHTML = "Learn about donation";
		btn.classList.add(
			"my-5",
			"bg-shade-gray",
			"w-[228px]",
			"text-right",
			"p-3",
			"rounded-tr-3xl",
			"rounded-tl-3xl",
			"rounded-bl-3xl",
			"w-full"
		);

		appendedBtn02.appendChild(btn);
		appendedBtn02.classList.add("cursor-not-allowed");
		appendedBtn02.setAttribute("disabled", true);

		donation.classList.add("cursor-not-allowed");
		donation.setAttribute("disabled", true);

		setTimeout(function () {
			const response = document.createElement("p");
			response.innerHTML =
				"Donating to animals involves contributing money, resources, or support to organizations and initiatives dedicated to the welfare and well-being of animals. These donations help fund rescue efforts, medical care, shelter, and conservation projects, making a positive impact on the lives of animals in need.";
			response.classList.add("max-w-[273px]", "w-full", "text-white");

			responseMsg03.appendChild(response);

			responseMsg03.classList.remove("hidden");

			setTimeout(function () {
				yesOrNoOption03.classList.remove("hidden");
			}, 3000);
		}, 2000);
	};

	const initialDonation = () => {
		appendBtn();
	};

	donationBtn.addEventListener("click", appendBtn);
	donation.addEventListener("click", initialDonation);

	// yes btn
	const yesBtn04 = document.querySelector("#yesBtn04");
	const appendedYesBtn = document.querySelector("#appendedYesBtn04");
	const responseMsgUnderDonation = document.querySelector(
		"#responseMsgUnderDonation"
	);
	const responseBtn02 = document.querySelector(".response-btn-02");

	const appendYesBtn = () => {
		const btn = document.createElement("button");
		btn.innerHTML = "Yes";
		btn.classList.add(
			"my-5",
			"bg-shade-gray",
			"w-[228px]",
			"text-right",
			"p-3",
			"rounded-tr-3xl",
			"rounded-tl-3xl",
			"rounded-bl-3xl"
		);

		appendedYesBtn.appendChild(btn);
		appendedYesBtn.classList.add("cursor-not-allowed");
		appendedYesBtn.setAttribute("disabled", true);

		setTimeout(function () {
			const response = document.createElement("p");
			response.innerHTML =
				"Great, glad I could help. Feel free to ask me any additional questions.";
			response.classList.add("max-w-[273px]", "w-full", "text-white");

			responseMsgUnderDonation.appendChild(response);

			responseMsgUnderDonation.classList.remove("hidden");

			responseBtn02.classList.remove("hidden");
			responseBtn02.classList.add("grid");

			// Show Yes or No option after 8 seconds
			setTimeout(function () {
				yesOrNoOption.classList.remove("hidden");
			}, 3000);
		}, 2000);
	};

	yesBtn04.addEventListener("click", appendYesBtn);

	// no btn
	const initialNoBtn = document.querySelector("#noBtn");

	const noBtn = document.querySelector("#noBtn04");
	const appendedNoBtn = document.querySelector("#appendedNoBtn");
	const responseMsg04 = document.querySelector("#responseMsg04");
	const responseMsg05 = document.querySelector("#responseMsg05");

	const appendNoBtn = () => {
		const btn = document.createElement("button");
		btn.innerHTML = "No";
		btn.classList.add(
			"my-5",
			"bg-shade-gray",
			"w-[228px]",
			"text-right",
			"p-3",
			"rounded-tr-3xl",
			"rounded-tl-3xl",
			"rounded-bl-3xl"
		);

		appendedNoBtn.appendChild(btn);
		appendedNoBtn.classList.add("cursor-not-allowed");
		appendedNoBtn.setAttribute("disabled", true);

		setTimeout(function () {
			const response = document.createElement("p");
			response.innerHTML =
				"I’m sorry but I don’t have information on that topic.";
			response.classList.add("max-w-[273px]", "w-full", "text-white");

			responseMsg04.appendChild(response);
			responseMsg04.classList.remove("hidden");
		}, 2000);

		setTimeout(function () {
			const response = document.createElement("p");
			response.innerHTML =
				"Feel free to ask me about the adoption and donation process.";
			response.classList.add("max-w-[273px]", "w-full", "text-white");

			responseMsg05.appendChild(response);
			responseMsg05.classList.remove("hidden");
		}, 3000);
	};

	const initialNoBtnFunc = () => {
		appendNoBtn();
	};

	noBtn.addEventListener("click", appendNoBtn);
	initialNoBtn.addEventListener("click", initialNoBtnFunc);
});
