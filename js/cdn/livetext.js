var LiveTex = {
    onLiveTexReady: function () {
        var interval = setInterval(function () {

            Livetex.setConversationAttributes(
                {neiros_url: document.url},
                {NEIROS_METRIKA_ID: NEIROS_METRIKA_ID},
                {UNIQ_NEIROS_ID: UNIQ_NEIROS_ID},
                {neiros_visit: neiros_visit},
            );
            clearInterval(interval)

        }, 1000);
    }
}