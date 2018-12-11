var app = new Vue({
	el:"#page-content",
	data:{
		inputFields:{reciever_account:"",reciever_bank:"",amount:"",narration:""}
	},
	mounted:function(){
		
	},
	methods:{
		transferFunds:function(){
			var formData = new FormData();
			// formData.append('reciever_account',app.inputFields.reciever_account)
			// formData.append('reciever_bank',app.inputFields.reciever_bank)
			// // formData.append('amount',)
			// formData.append('narration',app.inputFields.narration)
			// axios.get('https://natcu.com/dashboard/debit?action=debit&amount=' + app.inputFields.amount + '&reciever_account=' + app.inputFields.reciever_account + '&reciever_bank=' + app.inputFields.reciever_bank + '&narration=' + app.inputFields.narration)
		}
	}

})