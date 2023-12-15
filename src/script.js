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
		const btn = document.createElement("div");
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
			response.innerHTML = "";
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
		const btn = document.createElement("div");
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

	const yesOrNoOption = document.querySelector("#yesOrNoOption");
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
			response.innerHTML = "";
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
	const responseMsgUnderDonationIfNo = document.querySelector(
		"#responseMsgUnderDonationIfNo"
	);
	const responseMsgDonationProcess = document.querySelector(
		"#responseMsgDonationProcess"
	);

	const appendNoBtn = () => {
		const btn = document.createElement("div");
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

	const howToAdoptBtn = document.querySelector("#howToAdoptBtn");
	const howToAdoptAppend = document.querySelector("#howToAdoptAppend");
	const yesOrNoOptionAdoptProcess = document.querySelector(
		"#yesOrNoOptionAdoptProcess"
	);
	const howToAdopt = () => {
		const btn = document.createElement("button");

		btn.innerHTML = "How can I adopt from your organization?";
		btn.classList.add(
			"mb-5",
			"bg-shade-gray",
			"w-[228px]",
			"text-right",
			"p-3",
			"rounded-tr-3xl",
			"rounded-tl-3xl",
			"rounded-bl-3xl"
		);

		howToAdoptAppend.appendChild(btn);

		setTimeout(function () {
			const response = document.createElement("p");
			response.innerHTML =
				"Thank you for your interest in supporting our animal welfare initiatives! We greatly appreciate your willingness to contribute.";
			response.classList.add("max-w-[273px]", "w-full", "text-white");

			responseMsgUnderDonationIfNo.appendChild(response);
			responseMsgUnderDonationIfNo.classList.remove("hidden");
		}, 2000);

		setTimeout(function () {
			const response = document.createElement("p");
			response.innerHTML = `To make a donation, this is our official save all account:
				<br>
				<br>
				<div style="background-color: #D9D9D9; padding: 12px;">
				<p style="color: #000000">
				BDO:<br> 006540103300 <br><br>
				Paypal:<br> daycarlos28@gmail.com<br><br>
				BPI:<br> 4449004634<br> Roberta Nicole C. Benedito <br><br>
				GCASH:<br> 09178991013
				</p>
				</div>
				`;
			response.classList.add("max-w-[273px]", "w-full", "text-white");

			setTimeout(function () {
				yesOrNoOptionAdoptProcess.classList.remove("hidden");
			}, 3000);

			responseMsgDonationProcess.appendChild(response);
			responseMsgDonationProcess.classList.remove("hidden");
		}, 3000);
	};

	const initialNoBtnFunc = () => {
		appendNoBtn();
	};

	noBtn.addEventListener("click", appendNoBtn);
	initialNoBtn.addEventListener("click", initialNoBtnFunc);
	howToAdoptBtn.addEventListener("click", howToAdopt);
});

const yesBtnAdoptProcess = document.querySelector("#yesBtnAdoptProcess");
const appendedYesAdoptProcess = document.querySelector(
	"#appendedYesAdoptProcess"
);

const responseMsgYesAdoptProcess = document.querySelector(
	"#responseMsgYesAdoptProcess"
);

const appendYesBtnProcess = () => {
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

	appendedYesAdoptProcess.appendChild(btn);
	appendedYesAdoptProcess.classList.add("cursor-not-allowed");
	appendedYesAdoptProcess.setAttribute("disabled", true);

	setTimeout(function () {
		const response = document.createElement("p");
		response.innerHTML =
			"Great, glad I could help. Thank you for visiting our chat bot!";
		response.classList.add("max-w-[273px]", "w-full", "text-white");

		responseMsgYesAdoptProcess.appendChild(response);

		responseMsgYesAdoptProcess.classList.remove("hidden");

		setTimeout(function () {
			yesOrNoOption03.classList.remove("hidden");
		}, 3000);
	}, 2000);
};

yesBtnAdoptProcess.addEventListener("click", appendYesBtnProcess);

const input = document.querySelector("input");
const sendBtn = document.querySelector("#sendBtn");
const botResponse = document.querySelector("#botResponse");
const yesOrNoResponse = document.querySelector("#yesOrNoResponse");

const sendResponse = () => {
	const userQuestion = input.value.trim(); // Get and trim the user's question

	if (userQuestion === "") {
		console.log("Enter message");
		return;
	}

	const messageContainer = document.createElement("div");
	messageContainer.classList.add(
		"my-5",
		"bg-shade-gray",
		"w-[228px]",
		"text-right",
		"p-3",
		"rounded-tr-3xl",
		"rounded-tl-3xl",
		"rounded-bl-3xl"
	);
	messageContainer.classList.add("user-question");
	messageContainer.textContent = userQuestion;

	botResponse.appendChild(messageContainer);
	input.value = "";

	// setTimeout(function () {
	// 	const response = document.createElement("p");
	// 	response.innerHTML =
	// 		"Thank you for your interest in supporting our animal welfare initiatives! We greatly appreciate your willingness to contribute.";
	// 	response.classList.add("max-w-[273px]", "w-full", "text-white");

	// 	responseMsgUnderDonationIfNo.appendChild(response);
	// 	responseMsgUnderDonationIfNo.classList.remove("hidden");
	// }, 2000);

	// setTimeout(function () {
	// 	const response = document.createElement("p");
	// 	response.innerHTML = `To make a donation, this is our official save all account:
	// 				<br>
	// 				<br>
	// 				<div style="background-color: #D9D9D9; padding: 12px;">
	// 				<p style="color: #000000">
	// 				BDO:<br> 006540103300 <br><br>
	// 				Paypal:<br> daycarlos28@gmail.com<br><br>
	// 				BPI:<br> 4449004634<br> Roberta Nicole C. Benedito <br><br>
	// 				GCASH:<br> 09178991013
	// 				</p>
	// 				</div>
	// 				`;
	// 	response.classList.add("max-w-[273px]", "w-full", "text-white");

	// 	setTimeout(function () {
	// 		yesOrNoOptionAdoptProcess.classList.remove("hidden");
	// 	}, 3000);

	// 	responseMsgDonationProcess.appendChild(response);
	// 	responseMsgDonationProcess.classList.remove("hidden");
	// }, 3000);

	setTimeout(() => {
		if (
			userQuestion.includes("How can i adopt") ||
			userQuestion.includes("how can i adopt") ||
			userQuestion.includes("How to adopt") ||
			userQuestion.includes("how to adopt") ||
			userQuestion.includes("How can i adopt from your organization?") ||
			userQuestion.includes("how can i adopt from your organization?")
		) {
			displayMessage(
				"Currently, we've temporarily paused adoptions as we address an erlichia outbreak. Our priority is ensuring the well-being of our animals. We appreciate your understanding and will keep you updated on our progress."
			);
		} else if (
			userQuestion.includes("How can i donate?") ||
			userQuestion.includes("how can i donate?") ||
			userQuestion.includes("How to donate?") ||
			userQuestion.includes("how to donate?") ||
			userQuestion.includes("How can i donate from your organization?") ||
			userQuestion.includes("how can i donate from your organization?")
		) {
			displayMessage(
				`Thank you for your interest in supporting our animal welfare initiatives! We greatly appreciate your willingness to contribute. <br><br>
				
				To make a donation, this is our official save all account:
					<br>
				<br>
 				<div style="background-color: #D9D9D9; padding: 12px;">
 				<p style="color: #000000">
 				BDO:<br> 006540103300 <br><br>
				Paypal:<br> daycarlos28@gmail.com<br><br>
			BPI:<br> 4449004634<br> Roberta Nicole C. Benedito <br><br>
				</p>
					</div>`
			);
		} else {
			displayMessage(
				"Sorry, we couldn't find a matching response for your question.",
				true
			);
		}
	}, 2000);
};

const displayMessage = (message, isError = false) => {
	const responseContainer = document.createElement("div");
	responseContainer.innerHTML = message;
	responseContainer.classList.remove(isError ? "success" : "error");
	responseContainer.classList.add("max-w-[288px]", "w-full", "text-white");
	responseContainer.classList.add(
		"bg-shade-green",
		"w-[228px]",
		"text-left",
		"p-3",
		"rounded-tr-3xl",
		"rounded-tl-3xl",
		"rounded-br-3xl"
	);

	botResponse.appendChild(responseContainer);
};

sendBtn.addEventListener("click", sendResponse);
