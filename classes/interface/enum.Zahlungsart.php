<?php
declare(strict_types=1);

/**
 * Mirrors Unicorn2.Common.Interface.Zahlungsart.
 * Keep numeric values stable; Unicorn 2 serializes these enum values as ints in
 * the ApiWeb JSON payload.
 */
abstract class Zahlungsart
{
    const Unbekannt = 0;
    const Überweisung = 1;
    const Vorkasse = 2;
    const Lastschrift = 3;
    const Kreditkarte = 4;
    const SofortÜberweisung = 5;
    const ClickAndBuy = 6;
    const Rechnung = 7;
    const PayPal = 8;
    const GiroPay = 9;
    const Klarna = 10;
    const Nachnahme = 11;
    const Barzahlung = 12;
    const SkrillMoneybookers = 13;
    const BillSafe = 14;
    const Treuhandservice = 15;
    const SieheAngebotsbeschreibung = 16;
    const Gutschein = 17;
    const Maestro = 18;
    const iDeal = 19;
    const EPS = 20;
    const Przelewy24 = 21;
    const Mpass = 22;
    const Yapital = 23;
    const PayDirekt = 24;
    const BarzahlenDe = 25;
    const Rakuten = 26;
    const Hood = 27;
    const Auvito = 28;
    const MeinPaket = 29;
    const Shopgate = 30;
    const SumoScout = 31;
    const Hitmeister = 32;
    const Ricardo = 33;
    const DaWanda = 34;
    const PayPalExpress = 35;
    const Crowdfox = 36;
    const Idealo = 37;
    const Real = 38;
    const DaWandaPortemonnaiePayPal = 39;
    const DaWandaPortemonnaieSofortÜberweisung = 40;
    const DaWandaPortemonnaieKreditkarte = 41;
    const DaWandaPortemonnaieIDeal = 42;
    const DaWandaPortemonnaiePrzelewy24 = 43;
    const AmazonPay = 44;
    const Wish = 45;
    const Cdiscount = 46;
    const Etsy = 47;
    const MoneyOrder = 48;
    const Scheck = 49;
    const ManoMano = 50;
    const Check24 = 51;
    const Debit = 52;
    const RicardoKreditkarteApplePayViaStripe = 53;
    const Bol = 54;
    const MetroMarkets = 55;
    const Ratenzahlung = 56;
    const InternationalMarketplaceNetwork = 57;
    const IdealoDirektkaufPayment = 58;
    const OttoMarket = 59;
    const Rewe = 60;
    const InternationalMarketplaceNetworkEPrice = 61;
    const InternationalMarketplaceNetworkCDiscount = 62;
    const InternationalMarketplaceNetworkEMag = 63;
    const InternationalMarketplaceNetworkReal = 64;
    const InternationalMarketplaceNetworkBol = 65;
    const Wayfair = 66;
    const Kaufland = 67;
    const Breuninger = 68;
    const RechnungRatenzahlung = 69;
    const LastschriftRatenzahlung = 70;
    const Ratepay = 71;
    const HoodPay = 72;
    const Plaza = 73;
    const ApplePay = 74;
    const GooglePay = 75;
    const AndroidPay = 76;
    const Amazon = 77;
    const Temu = 78;
}
