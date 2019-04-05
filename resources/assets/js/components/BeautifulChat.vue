<template>
    <div style="z-index: 999 !important;">
        <beautiful-chat
                :participants="participants"
                :title="title"
                :titleImageUrl="titleImageUrl"
                :onMessageWasSent="onMessageWasSent"
                :messageList="messageList"
                :newMessagesCount="newMessagesCount"
                :isOpen="isChatOpen"
                :close="closeChat"
                :open="openChat"
                :showEmoji="true"
                :showFile="false"
                :showTypingIndicator="showTypingIndicator"
                :colors="colors"
                :alwaysScrollToBottom="alwaysScrollToBottom"
                :messageStyling="messageStyling"
                @keydown="isTyping"
                @keyup="notTyping">
        </beautiful-chat>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                participants: [
                    {
                        id: 'user2',
                        name: 'Support',
                        imageUrl: 'https://avatars3.githubusercontent.com/u/37018832?s=200&v=4'
                    }
                ], // the list of all the participant of the conversation. `name` is the user name, `id` is used to establish the author of a message, `imageUrl` is supposed to be the user avatar.
                title: 'Bliksemdesign klantenservice',
                titleImageUrl: 'https://a.slack-edge.com/66f9/img/avatars-teams/ava_0001-34.png',
                messageList: [], // the list of the messages to show, can be paginated and adjusted dynamically
                newMessagesCount: 0,
                isChatOpen: false, // to determine whether the chat window should be open or closed
                showTypingIndicator: '', // when set to a value matching the participant.id it shows the typing indicator for the specific user
                colors: {
                    header: {
                        bg: '#4e8cff',
                        text: '#ffffff'
                    },
                    launcher: {
                        bg: '#4e8cff'
                    },
                    messageList: {
                        bg: '#ffffff'
                    },
                    sentMessage: {
                        bg: '#4e8cff',
                        text: '#ffffff'
                    },
                    receivedMessage: {
                        bg: '#eaeaea',
                        text: '#222222'
                    },
                    userInput: {
                        bg: '#f4f7f9',
                        text: '#565867'
                    }
                }, // specifies the color scheme for the component
                alwaysScrollToBottom: true, // when set to true always scrolls the chat to the bottom when new events are in (new message, user starts typing...)
                messageStyling: true // enables *bold* /emph/ _underline_ and such (more info at github.com/mattmezza/msgdown)
            }
        },
        created() {
            this.fetchMessages();
            window.Echo.channel('chat.'+window.Laravel.chatSession)
                .listen('CustomerChatSent', (e) => {
                    this.messageList.push(e.data);
                    if (this.isChatOpen == false){
                        this.newMessagesCount++;
                    }
                })
                .listenForWhisper('typing', (e) => {
                    console.log(e);
                    // if(e.name !='') {
                    this.showTypingIndicator = 'typing .........';
                    // }
                    // else {
                    //     this.showTypingIndicator = ''
                    // }
                    // remove is typing indicator after 0.9s
                    setTimeout(function() {
                        this.showTypingIndicator = ''
                    }, 900);
                });

            window.Echo.join('chat.'+window.Laravel.chatSession)
                .whisper('typing', );
        },
        watch: {
            message(){
                // window.Echo.channel('chat.'+window.Laravel.chatSession)
                //     .listenForWhisper('typing', (e) => {
                //         console.log('typing');
                //         // if(e.name !='') {
                //         this.showTypingIndicator = 'typing .........';
                //         // }
                //         // else {
                //         //     this.showTypingIndicator = ''
                //         // }
                //         // remove is typing indicator after 0.9s
                //         setTimeout(function() {
                //             this.showTypingIndicator = ''
                //         }, 900);
                //     });
                // .listen('CustomerChatTyping', (e) => {
                //     this.messageList.push(e.data);
                // })
                ;
            }
        },
        methods: {
            sendMessage (text) {
                if (text.length > 0) {
                    this.newMessagesCount = this.isChatOpen ? this.newMessagesCount : this.newMessagesCount + 1
                    this.onMessageWasSent({
                        author: 'support',
                        type: 'text',
                        data: { text }
                    })
                }
            },
            onMessageWasSent (message) {
                this.messageList = [
                    ...this.messageList,
                    message
                ]
                axios.post('/chatbox', message);
            },
            openChat () {
                // called when the user clicks on the fab button to open the chat
                this.isChatOpen = true
                this.newMessagesCount = 0
            },
            closeChat () {
                // called when the user clicks on the botton to close the chat
                this.isChatOpen = false
            },
            fetchMessages() {
                axios.get('/chatbox/messages').then(response => {
                    this.messageList = response.data;
                });
            },
            isTyping(event) {
                window.Echo.join('chat.'+window.Laravel.chatSession)
                    .whisper('typing');
                this.showTypingIndicator = '...'
            },
            notTyping() {
                this.showTypingIndicator = ''
            }
        }
    }
</script>

