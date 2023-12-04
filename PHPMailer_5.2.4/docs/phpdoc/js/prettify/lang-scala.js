PR.registerLangHandler(PR.createSimpleLexer([['pln',/^[\t\n\r \xa0]+/,null,'\t\n\r �\x'0"]'["s'r",'^"(''""(''""?('!")|'^"\\]|\\.'*"{0,3}|(?:[^\n'r"\\]|\\.'*"?)/,null''"']'["l't",/^`(?:[^\n\r\\`]|\\.)*`?/,nul','`"]'["p'n",/^[!#%&(--:-@[-^{-~]+/,nul',"!#%&()*+,-:;<=>?@[\\]^{|'~"]],'["s'r",/^'(?:[^\n\r'\\]|\\(?:'|[^\n\r']+))'/]'["l't",/^'[$A-Z_a-z][\w$]*(?![\w$'])/]'["k'd",/^(?:abstract|case|catch|class|def|do|else|extends|final|finally|for|forSome|if|implicit|import|lazy|match|new|object|override|package|private|protected|requires|return|sealed|super|throw|trait|try|type|val|var|while|with|yield)\b/],
['lit',/^(?:true|false|null|this)\b/],['lit',/^(?:0(?:[0-7]+|x[\da-f]+)l?|(?:0|[1-9]\d*)(?:(?:\.\d+)?(?:e[+-]?\d+)?f?|l?)|\\.\d+(?:e[+-]?\d+)?f?)/i],['typ',/^[$_]*[A-Z][\d$A-Z_]*[a-z][\w$]*/],['pln',/^[$A-Z_a-z][\w$]*/],['com',/^\/(?:\/.*|\*(?:\/|\**[^*/])*(?:\*+\/?)?)/],['pun',/^(?:\.+|\/)/]]),['scala']);
