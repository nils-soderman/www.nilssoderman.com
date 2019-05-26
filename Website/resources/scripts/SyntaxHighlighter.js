var CommentHighlight = {
    "#" : "green",
}

var WordHighlight = {
    "import" : "#9a45b2",
    "return" : "#9a45b2",
    "global" : "#9a45b2",
    "True" : "#aa2f2f",
    "False" : "#aa2f2f",
    "def" : "#2039aa",

}

var WithinHighlight = {
    "'" : "#aa5b00",
    '"' : "#aa5b00",
}

var SplitChars = [undefined, " ", "(", ")", "{", "}", "-", "=", "[", "]", ":", ","]

function ApplySyntaxHighlightOnCodeBlock(CodeBlock) {
    var Code = CodeBlock.innerHTML;
    Code = GenerateHTMLSyntaxHighlight(Code)
    CodeBlock.innerHTML = Code;
}

function GenerateHTMLSyntaxHighlight(Code) {
    //<span style="color:brown">
    
    Lines = Code.split(/\n/);
    
    Code = "";
    for (var i = 0; i < Lines.length; i++) {
        Line = Lines[i];
        Line = ApplySyntaxHighlightOnLine(Line);
        Code += Line + "\n";
    }
    
    return Code;
}

function ApplySyntaxHighlightOnLine(Line) {

    Line = SyntaxWithinChar(Line);
    Line = SyntaxComment(Line);
    Line = SyntaxSingleWords(Line);

    return Line;
}

function SyntaxComment(Line){
    for (var Char in this.CommentHighlight){
        if (Line.includes(Char)) {
            var Comment = Line.substring(Line.indexOf(Char)+1);
            var Code = Line.substring(0, Line.indexOf(Char));
            if (Code.substring(Code.length-19) != '<span style="color:') {
                Line = Code + EmbedTextInSpan(Char + Comment, this.CommentHighlight[Char]);
            }
        }
    }
    return Line
}

function SyntaxSingleWords(Line){
    for (var Char in this.WordHighlight){
        if (Line.includes(Char)) {
            SubString = Line.split(Char);
            console.log(SubString)
            NewLine = SubString[0]
            for (var i = 0; i < SubString.length-1; i+=1) {
                var BeginningChar = SubString[i][SubString[i].length -1];
                var EndChar = SubString[i+1][0];
                if (SplitChars.includes(BeginningChar) && SplitChars.includes(EndChar)){
                    NewLine += EmbedTextInSpan(Char, this.WordHighlight[Char]) + SubString[i+1];
                }
                
            }
            Line = NewLine
        }
    }
    return Line;
}

function IsInsideSpan(Code){
    if (Code.includes("<span")) {
        if (!Code.split("<span")[1].includes("</span")){
            return true;
        }
    }
    return false;
}

function SyntaxWithinChar(Line){
    for (var Char in this.WithinHighlight){
        if (Line.includes(Char)) {
            SubString = Line.split(Char);
            NewLine = SubString[0]
            for (var i = 0; i < SubString.length; i+=3) {
                var Str = Char + SubString[i+1] + Char;
                NewLine += EmbedTextInSpan(Str, this.WithinHighlight[Char]) + SubString[i+2];
            }
            Line = NewLine;
        }
    }
    
    
    return Line;
}

function EmbedTextInSpan(Text, Color) {
    return '<span style="color:'+Color+'">' + Text + "</span>";
}


function main(){
    var CodeBlocks = document.getElementsByClassName('SyntaxHighlight');
    for (var i = 0; i < CodeBlocks.length; i++) {
        ApplySyntaxHighlightOnCodeBlock(CodeBlocks[i]);
    }
}

main()