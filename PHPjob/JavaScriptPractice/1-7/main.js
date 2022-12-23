class Taiyaki
{
    constructor(nakami)
    {
        this.nakami = nakami;
    }

    logNakami()
    {
        console.log(`中身は${this.nakami}です`);
    }
}

let anko = new Taiyaki("あんこ");
let cream = new Taiyaki("クリーム");
let cheese = new Taiyaki("チーズ");

anko.logNakami();
cream.logNakami();
cheese.logNakami();