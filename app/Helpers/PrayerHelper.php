<?php

namespace App\Helpers;

class PrayerHelper
{
    public static function getPrayers()
    {
        //types: collect, offerings, preface, nuptial_blessing, after_communion, vows, solemn_blessing, commendation, invitation_to_prayer
        //translation_id: 1 => English
        return collect([

            //
            // Wedding
            //
            [
                'id' => 1,
                'sort_order' => 1,
                'alt_id' => 'A1',
                'translation_id' => 1,
                'liturgy_type' => 'wedding',
                'type' => 'collect',
                'note' => 'The prayer AI may not be used if the first Nuptial Blessing (MI) is selected.',
                'text' => 'O God, who consecrated the bond of Marriage
                by so great a mystery
                that in the wedding covenant you foreshadow
                the Sacrament of Christ and his Church, grant, we pray, to these your servants, that what they receive in faith
                they may live out in deeds.
                Through our Lord Jesus Christ, your Son,
                who lives and reigns with you in the unity of the Holy Spirit, one God, for ever and ever.',
            ],
            [
                'id' => 2,
                'sort_order' => 2,
                'alt_id' => 'A1',
                'translation_id' => 1,
                'liturgy_type' => 'wedding',
                'type' => 'collect',
                'text' => 'O God, who in creating the human race
                willed that man and wife should be one,
                join, we pray, in a bond of inseparable love
                these your servants who are to be united in the covenant of
                Marriage,
                so that, as you make their love fruitful,
                they may become, by your grace, witnesses to charity itself. Through our Lord Jesus Christ, your Son,
                who lives and reigns with you in the unity of the Holy Spirit, one God, for ever and ever.',
            ],
            [
                'id' => 3,
                'sort_order' => 3,
                'alt_id' => 'A1',
                'translation_id' => 1,
                'liturgy_type' => 'wedding',
                'type' => 'collect',
                'text' => 'Be attentive to our prayers, O Lord,
                and in your kindness
                pour out your grace on these your servants (N. and N.),
                that, coming together before your altar,
                they may be confirmed in love for one another.
                Through our Lord Jesus Christ, your Son,
                who lives and reigns with you in the unity of the Holy Spirit, one God, for ever and ever.',
            ],
            [
                'id' => 4,
                'sort_order' => 4,
                'alt_id' => 'A1',
                'translation_id' => 1,
                'liturgy_type' => 'wedding',
                'type' => 'collect',
                'text' => 'Grant, we pray, almighty God,
                that these your servants,
                now to be joined by the Sacrament of Matrimony,
                may grow in the faith they profess
                and enrich your Church with faithful offspring.
                Through our Lord Jesus Christ, your Son,
                who lives and reigns with you in the unity of the Holy Spirit, one God, for ever and ever.',
            ],
            [
                'id' => 5,
                'sort_order' => 5,
                'alt_id' => 'A1',
                'translation_id' => 1,
                'liturgy_type' => 'wedding',
                'type' => 'collect',
                'text' => 'Be attentive to our prayers, O Lord,
                and in your kindness uphold
                what you have established for the increase of the human race, so that the union you have created
                may be kept safe by your assistance.
                Through our Lord Jesus Christ, your Son,
                who lives and reigns with you in the unity of the Holy Spirit, one God, for ever and ever.',
            ],
            [
                'id' => 6,
                'sort_order' => 6,
                'alt_id' => 'A1',
                'translation_id' => 1,
                'liturgy_type' => 'wedding',
                'type' => 'collect',
                'text' => 'O God, who since the beginning of the world have blessed the increase of offspring,
                show favor to our supplications
                and pour forth the help of your blessing
                on these your servants N. and N., so that in the union of Marriage they may be bound together
                In mutual affection,
                in likeness of mind,
                and in shared holiness.
                Through our Lord Jesus Christ, your Son,
                who lives and reigns with you in the unity of the Holy Spirit, one God, for ever and ever.',
            ],



            [
                'id' => 100,
                'sort_order' => 100,
                'alt_id' => 'K1',
                'translation_id' => 1,
                'liturgy_type' => 'wedding',
                'type' => 'offerings',
                'text' => 'Receive, we pray, O Lord,
                the offering made on the occasion
                of this sealing of the sacred bond of Marriage, and, just as your goodness is its origin,
                may your providence guide its course. Through Christ our Lord.',
            ],
            [
                'id' => 101,
                'sort_order' => 101,
                'alt_id' => 'K2',
                'translation_id' => 1,
                'liturgy_type' => 'wedding',
                'type' => 'offerings',
                'text' => 'Receive in your kindness, Lord,
                the offerings we bring in gladness before you,
                and in your fatherly love
                watch over those you have joined in a sacramental covenant. Through Christ our Lord.',
            ],

            [
                'id' => 102,
                'sort_order' => 102,
                'alt_id' => 'K3',
                'translation_id' => 1,
                'liturgy_type' => 'wedding',
                'type' => 'offerings',
                'text' => 'Show favor to our supplications, O Lord,
                and receive with a kindly countenance
                the oblations we offer for these your servants, joined now in a holy covenant,
                that through these mysteries
                they may be strengthened
                in love for one another and for you.
                Through Christ our Lord.',
            ],
            [
                'id' => 110,
                'sort_order' => 110,
                'alt_id' => 'L1',
                'translation_id' => 1,
                'liturgy_type' => 'wedding',
                'type' => 'preface',
                'text' => 'It is truly right and just, our duty and our salvation, always and everywhere to give you thanks,
                Lord, holy Father, almighty and eternal God.
                For you have forged the covenant of Marriage as a sweet yoke of harmony
                and an unbreakable bond of peace,
                so that the chaste and fruitful love of holy Matrimony
                may serve to increase the children you adopt as your own.
                By your providence and grace, O Lord,
                you accomplish the wonder of this twofold design:
                that, while the birth of children brings beauty to the world, their rebirth in Baptism gives increase to the Church, through Christ our Lord.
                Through him, with the Angels and all the Saints, we sing the hymn of your praise,
                as without end we acclaim:
                Holy, Holy, Holy Lord God of hosts.
                Heaven and earth are full of your glory.
                Hosanna in the highest.
                Blessed is he who comes in the name of the Lord. Hosanna in the highest.',
            ],
            [
                'id' => 111,
                'sort_order' => 111,
                'alt_id' => 'L2',
                'translation_id' => 1,
                'liturgy_type' => 'wedding',
                'type' => 'preface',
                'text' => 'It is truly right and just, our duty and our salvation, always and everywhere to give you thanks.
                Lord, holy Father, almighty and eternal God, through Christ our Lord.
                For in him you have made a new covenant with your people, so that, as you have redeemed man and woman
                by the mystery of Christ’s Death and Resurrection,
                so in Christ you might make them partakers of divine nature and joint heirs with him of heavenly glory.
                In the union of husband and wife
                you give a sign of Christ’s loving gift of grace, so that the Sacrament we celebrate
                might draw us back more deeply
                into the wondrous design of your love.
                And so, with the Angels and all the Saints, we praise you, and without end we acclaim:
                Holy, Holy, Holy Lord God of hosts ...',
            ],
            [
                'id' => 112,
                'sort_order' => 112,
                'alt_id' => 'L3',
                'translation_id' => 1,
                'liturgy_type' => 'wedding',
                'type' => 'preface',
                'text' => 'It is truly right and just, our duty and our salvation, always and everywhere to give you thanks,
                Lord, holy Father, almighty and eternal God.
                For you willed that the human race,
                created by the gift of your goodness,
                should be raised to such high dignity
                that in the union of husband and wife
                you might bestow a true image of your love.
                For those you created out of charity
                you call to the law of charity without ceasing and grant them a share in your eternal charity.
                And so, the Sacrament of holy Matrimony, as the abiding sign of your own love, consecrates the love of man and woman, through Christ our Lord.
                Through him, with the Angels and all the Saints, we sing the hymn of your praise,
                as without end we acclaim:
                Holy, Holy, Holy Lord God of hosts ...',
            ],
            [
                'id' => 120,
                'sort_order' => 120,
                'alt_id' => 'M1',
                'translation_id' => 1,
                'liturgy_type' => 'wedding',
                'type' => 'nuptial_blessing',
                'text' => 'O God, who by your mighty power
                created all things out of nothing,
                and, when you had set in place
                the beginnings of the universe,
                formed man and woman in your own image,
                making the woman an inseparable helpmate to the man, that they might no longer be two, but one flesh,
                and taught that what you were pleased to make one must never be divided;
                O God, who consecrated the bond of Marriage by so great a mystery
                that in the wedding covenant you foreshadowed the Sacrament of Christ and his Church;
                O God, by whom woman is joined to man
                and the companionship they had in the beginning is endowed with the one blessing
                not forfeited by original sin
                nor washed away by the flood.
                Look now with favor on these your servants, joined together in Marriage,
                who ask to be strengthened by your blessing. Send down on them the grace of the Holy Spirit and pour your love into their hearts,
                that they may remain faithful in the Marriage covenant.
                May the grace of love and peace
                abide in your daughter N.,
                and let her always follow the example of those holy women whose praises are sung in the Scriptures.
                May her husband entrust his heart to her, so that, acknowledging her as his equal and his joint heir to the life of grace,
                he may show her due honor
                and cherish her always
                with the love that Christ has for his Church.
                And now, Lord, we implore you:
                may these your servants
                hold fast to the faith and keep your commandments;
                made one in the flesh,
                may they be blameless in all they do;
                and with the strength that comes from the Gospel, may they bear true witness to Christ before all; (may they be blessed with children,
                and prove themselves virtuous parents,
                who live to see their children’s children).
                And grant that,
                reaching at last together the fullness of years for which they hope,
                they may come to the life of the blessed
                in the Kingdom of Heaven.
                Through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 121,
                'sort_order' => 121,
                'alt_id' => 'M2',
                'translation_id' => 1,
                'liturgy_type' => 'wedding',
                'type' => 'nuptial_blessing',
                'text' => 'Holy Father,
                who formed man in your own image,
                male and female you created them,
                so that as husband and wife, united in body and heart, they might fulfill their calling in the world;
                O God, who, to reveal the great design you formed in your love, willed that the love of spouses for each other
                should foreshadow the covenant you graciously made with your
                people,
                so that, by fulfillment of the sacramental sign,
                the mystical marriage of Christ with his Church
                might become manifest
                in the union of husband and wife among your faithful;
                Graciously stretch out your right hand
                over these your servants (N. and N.), we pray,
                and pour into their hearts the power of the Holy Spirit.
                Grant, O Lord,
                that, as they enter upon this sacramental union,
                they may share with one another the gifts of your love and, by being for each other a sign of your presence, become one heart and one mind.
                May they also sustain, O Lord, by their deeds
                the home they are forming
                (and prepare their children
                to become members of your heavenly household
                by raising them in the way of the Gospel).
                Graciously crown with your blessings your daughter N., so that, by being a good wife (and mother),
                she may bring warmth to her home with a love that Is pure and adorn it with welcoming graciousness.
                Bestow a heavenly blessing also, O Lord, on N., your servant,
                that he may be a worthy, good and faithful husband (and a provident father).
                Grant, holy Father,
                that, desiring to approach your table
                as a couple joined in Marriage in your presence, they may one day have the joy
                of taking part in your great banquet in heaven. Through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 122,
                'sort_order' => 122,
                'alt_id' => 'M3',
                'translation_id' => 1,
                'liturgy_type' => 'wedding',
                'type' => 'nuptial_blessing',
                'text' => 'Holy Father, maker of the whole world,
                who created man and woman in your own image
                and willed that their union be crowned with your blessing, we humbly beseech you for these your servants,
                who are joined today in the Sacrament of Matrimony.
                May your abundant blessing, Lord,
                come down upon this bride, N.,
                and upon N., her companion for life,
                and may the power of your Holy Spirit
                set their hearts aflame from on high,
                so that, living out together the gift of Matrimony, they may (adorn their family with children
                and) enrich the Church.
                In happiness may they praise you, O Lord, in sorrow may they seek you out;
                may they have the joy of your presence
                to assist them in their toil,
                and know that you are near
                to comfort them in their need;
                let them pray to you in the holy assembly
                and bear witness to you in the world,
                and after a happy old age,
                together with the circle of friends that surrounds them, may they come to the Kingdom of Heaven.
                Through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 130,
                'sort_order' => 130,
                'alt_id' => 'N1',
                'translation_id' => 1,
                'liturgy_type' => 'wedding',
                'type' => 'after_communion',
                'text' => 'By the power of this sacrifice, O Lord,
                accompany with your loving favor
                what in your providence you have instituted,
                so as to make of one heart in love
                those you have already joined in this holy union
                (and replenished with the one Bread and the one Chalice). Through Christ our Lord.',
            ],
            [
                'id' => 131,
                'sort_order' => 131,
                'alt_id' => 'N2',
                'translation_id' => 1,
                'liturgy_type' => 'wedding',
                'type' => 'after_communion',
                'text' => 'Having been made partakers at your table,
                we pray, O Lord,
                that those who are united by the Sacrament of Marriage may always hold fast to you
                and proclaim your name to the world.
                Through Christ our Lord.',
            ],
            [
                'id' => 132,
                'sort_order' => 132,
                'alt_id' => 'N3',
                'translation_id' => 1,
                'liturgy_type' => 'wedding',
                'type' => 'after_communion',
                'text' => 'Grant, we pray, almighty God,
                that the power of the Sacrament we have received may find growth in these your servants
                and that the effects of the sacrifice we have offered may be felt by us all.
                Through Christ our Lord.',
            ],
            [
                'id' => 140,
                'sort_order' => 140,
                'alt_id' => 'O1',
                'translation_id' => 1,
                'liturgy_type' => 'wedding',
                'type' => 'solemn_blessing',
                'text' => 'May God the eternal Father
                keep you of one heart in love for one another,
                that the peace of Christ may dwell in you and abide always in your home.
                R. Amen.
                May you be blessed in your children, have solace in your friends
                and enjoy true peace with everyone. R. Amen.
                May you be witnesses in the world to God’s charity,
                so that the afflicted and needy who have known your kindness may one day receive you thankfully
                into the eternal dwelling of God.
                R. Amen.
                And may almighty God bless all of you, who are gathered here, the Father, and the Son, and the Holy Spirit.
                R. Amen',
            ],
            [
                'id' => 141,
                'sort_order' => 141,
                'alt_id' => 'O2',
                'translation_id' => 1,
                'liturgy_type' => 'wedding',
                'type' => 'solemn_blessing',
                'text' => 'May God the all-powerful Father grant you his joy
                and bless you in your children.
                R. Amen.
                May the Only Begotten Son of God
                stand by you with compassion in good times and in bad. R. Amen.
                May the Holy Spirit of God
                always pour forth his love into your hearts. R. Amen.
                And may almighty God bless all of you, who are gathered here, the Father, and the Son, and the Holy Spirit.
                R. Amen.',
            ],
            [
                'id' => 142,
                'sort_order' => 142,
                'alt_id' => 'O3',
                'translation_id' => 1,
                'liturgy_type' => 'wedding',
                'type' => 'solemn_blessing',
                'text' => 'May the Lord Jesus,
                who graced the marriage at Cana by his presence,
                bless you and your loved ones.
                R. Amen.
                May he, who loved the Church to the end, unceasingly pour his love into your hearts. R. Amen.
                May the Lord grant
                that, bearing witness to faith in his Resurrection, you may await with joy the blessed hope to come. R. Amen.
                And may almighty God bless all of you, who are gathered here, the Father, and the Son, and the Holy Spirit.
                R. Amen.',
            ],

            //
            // Funeral
            //
            [
                'id' => 201,
                'sort_order' => 201,
                'alt_id' => 'B1',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'Outside the Easter season',
                'text' => 'Almighty God and Father,
                it is our certain faith
                that your Son, who died on the cross, was raised from the dead, the first fruits of all who have fallen asleep.
                Grant that through this mystery
                your servant N., who has gone to his/her rest in Christ,
                may share in the joy of his resurrection.
                We ask this through our Lord Jesus Christ, your Son, who lives and reigns with you and the Holy Spirit, one God, for ever and ever.
                Outside the Easter season
                R. Amen.',
            ],
            [
                'id' => 202,
                'sort_order' => 202,
                'alt_id' => 'B2',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'Outside the Easter season',
                'text' => 'O God,
                to whom mercy and forgiveness belong,
                hear our prayers on behalf of your servant N.,
                whom you have called out of this world;
                and because he/she put his/her hope and trust in you, command that he/she be carried safely home to heaven and come to enjoy your eternal reward.
                We ask this through our Lord Jesus Christ, your Son, who lives and reigns with you and the Holy Spirit, one God, for ever and ever.
                R. Amen.',
            ],
            [
                'id' => 203,
                'sort_order' => 203,
                'alt_id' => 'B3',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'Outside the Easter season',
                'text' => 'O God,
                in whom sinners find mercy and the saints find joy,
                we pray to you for our brother/sister N.,
                whose body we honor with Christian burial,
                that he/she may be delivered from the bonds of death. Admit him/her to the joyful company of your saints and raise him/her on the last day
                to rejoice in your presence for ever.
                We ask this through our Lord Jesus Christ, your Son, who lives and reigns with you and the Holy Spirit, one God, for ever and ever.
                R. Amen.',
            ],
            [
                'id' => 204,
                'sort_order' => 204,
                'alt_id' => 'B4',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'During the Easter season',
                'text' => 'God of loving kindness,
                listen favorably to our prayers:
                strengthen our belief that your Son has risen from the dead and our hope that your servant N. will also rise again.
                We ask this through our Lord Jesus Christ, your Son, who lives and reigns with you and the Holy Spirit, one God, for ever and ever.
                R. Amen.',
            ],
            [
                'id' => 205,
                'sort_order' => 205,
                'alt_id' => 'B5',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'General',
                'text' => 'God of faithfulness,
                in your wisdom you have called your servant N. out of this world; release him/her from the bonds of sin,
                and welcome him/her into your presence,
                so that he/she may enjoy eternal light and peace
                and be raised up in glory with all your saints.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 206,
                'sort_order' => 206,
                'alt_id' => 'B6',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'General',
                'text' => 'Lord, in our grief we turn to you. Are you not the God of love who opens your ears to all?
                Listen to our prayers for your servant N.,
                whom you have called out of this world:
                lead him/her to your kingdom of light and peace and count him/her among the saints in glory.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 207,
                'sort_order' => 207,
                'alt_id' => 'B7',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'General',
                'text' => 'Holy Lord, almighty and eternal God,
                hear our prayers for your servant N.,
                whom you have summoned out of this world.
                Forgive his/her sins and failings
                and grant him/her a place of refreshment, light, and peace.
                Let him/her pass unharmed through the gates of death to dwell with the blessed in light,
                as you promised to Abraham and his children for ever. Accept N. into your safekeeping
                and on the great day of judgment raise him/her up with all the saints to inherit your eternal kingdom.
                We ask this through Christ our Lord. R. Amen.',
            ],
            [
                'id' => 208,
                'sort_order' => 208,
                'alt_id' => 'B8',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'General',
                'text' => 'Into your hands, O Lord,
                we humbly entrust our brother/sister N.
                In this life you embraced him/her with your tender love; deliver him/her now from every evil
                and bid him/her enter eternal rest.
                The old order has passed away:
                welcome him/her then into paradise,
                where there will be no sorrow, no weeping nor pain, but the fullness of peace and joy
                with your Son and the Holy Spirit
                for ever and ever.
                R. Amen.',
            ],
            [
                'id' => 209,
                'sort_order' => 209,
                'alt_id' => 'B9',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'General',
                'text' => 'Almighty God and Father,
                it is our certain faith
                that your Son, who died on the cross, was raised from the dead, the first fruits of all who have fallen asleep.
                Grant that through this mystery
                your servant N., who has gone to his/her rest in Christ,
                may share in the joy of his resurrection.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 210,
                'sort_order' => 210,
                'alt_id' => 'B10',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'General',
                'text' => 'O God, glory of believers and life of the just,
                by the death and resurrection of your Son, we are redeemed: have mercy on your servant N.,
                and make him/her worthy to share the joys of paradise,
                for he/she believed in the resurrection of the dead.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 211,
                'sort_order' => 211,
                'alt_id' => 'B11',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'General',
                'text' => 'Almighty God and Father,
                by the mystery of the cross, you have made us strong; by the sacrament of the resurrection
                you have sealed us as your own.
                Look kindly upon your servant N.,
                now freed from the bonds of mortality,
                and count him/her among your saints in heaven.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 212,
                'sort_order' => 212,
                'alt_id' => 'B12',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'General',
                'text' => 'God of loving kindness,
                listen favorably to our prayers:
                strengthen our belief that your Son has risen from the dead and our hope that your servant N. will also rise again.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 213,
                'sort_order' => 213,
                'alt_id' => 'B13',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'General',
                'text' => 'To you, O God, the dead do not die,
                and in death our life is changed, not ended.
                Hear our prayers
                and command the soul of your servant N.
                to dwell with Abraham, your friend,
                and be raised at last on the great day of judgment.
                In your mercy cleanse him/her of any sin
                which he/she may have committed through human frailty.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 214,
                'sort_order' => 214,
                'alt_id' => 'B14',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'General',
                'text' => 'Lord God, in whom all find refuge, we appeal to your boundless mercy: grant to the soul of your servant N. a kindly welcome,
                cleansing of sin,
                release from the chains of death, and entry into everlasting life.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 215,
                'sort_order' => 215,
                'alt_id' => 'B15',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'General',
                'text' => 'God of all consolation,
                open our hearts to your word,
                so that, listening to it, we may comfort one another, finding light in time of darkness
                and faith in time of doubt.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 216,
                'sort_order' => 216,
                'alt_id' => 'B16',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'General',
                'text' => 'O God,
                to whom mercy and forgiveness belong,
                hear our prayers on behalf of your servant N.,
                whom you have called out of this world;
                and because he/she put his/her hope and trust in you, command that he/she be carried safely home to heaven and come to enjoy your eternal reward.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 217,
                'sort_order' => 217,
                'alt_id' => 'B17',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'General',
                'text' => 'O God,
                in whom sinners find mercy and the saints find joy,
                we pray to you for our brother/sister N.,
                whose body we honor with Christian burial,
                that he/she may be delivered from the bonds of death. Admit him/her to the joyful company of your saints and raise him/her on the last day
                to rejoice in your presence for ever.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 218,
                'sort_order' => 218,
                'alt_id' => 'B18',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'A priest',
                'text' => 'God of mercy and love,
                grant to N., your servant and priest,
                a glorious place at your heavenly table,
                for you made him here on earth
                a faithful minister of your word and sacrament.
                We ask this through Christ our Lord.
                R. Amen.
',
            ],
            [
                'id' => 219,
                'sort_order' => 219,
                'alt_id' => 'B19',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'A priest',
                'text' => 'O God,
                listen favorably to our prayers
                offered on behalf of your servant and priest,
                and grant that N.,
                who committed himself zealously to the service of your name, may rejoice for ever in the company of your saints.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 220,
                'sort_order' => 220,
                'alt_id' => 'B20',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'A deacon',
                'text' => 'Lord God,
                you chose our brother N. to serve your people as a priest and to share the joys and burdens of their lives.
                Look with mercy on him
                and give him the reward of his labors,
                the fullness of life promised to those who preach your
                holy Gospel.
                We ask this through Christ our Lord. R. Amen.',
            ],
            [
                'id' => 221,
                'sort_order' => 221,
                'alt_id' => 'B21',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'A deacon',
                'text' => 'God of mercy,
                as once you chose seven men of honest repute
                to serve your Church,
                so also you chose N. as your servant and deacon. Grant that he may rejoice in your eternal fellowship with all the heralds of your Gospel,
                for he was untiring in his ministry here on earth.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 222,
                'sort_order' => 222,
                'alt_id' => 'B22',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'A deacon',
                'text' => 'Lord God,
                you sent your Son into the world
                to preach the Good News of salvation
                and to pour out his Spirit of grace upon your Church.
                Look with kindness on your servant N.
                As a deacon in the Church
                he was strengthened by the gift of the Spirit to preach the Good News,
                to minister in your assembly,
                and to do the works of charity.
                Give him the reward promised
                to those who show their love of you by service to their neighbor.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 223,
                'sort_order' => 223,
                'alt_id' => 'B23',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'A religious',
                'text' => 'All-powerful God,
                we pray for our brother/sister N.,
                who responded to the call of Christ
                and pursued wholeheartedly the ways of perfect love. Grant that he/she may rejoice
                on that day when your glory will be revealed
                and in company with all his/her brothers and sisters share for ever the happiness of your kingdom.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 224,
                'sort_order' => 224,
                'alt_id' => 'B24',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'A religous',
                'text' => 'God of blessings,
                source of all holiness,
                the voice of your Spirit has drawn countless men and women to follow Jesus Christ
                and to bind themselves to you
                with ready will and loving heart.
                Look with mercy on N.
                who sought to fulfill his/her vows to you,
                and grant him/her the reward promised to all good and
                faithful servants.
                May he/she rejoice in the company of the saints and with them praise you for ever.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 225,
                'sort_order' => 225,
                'alt_id' => 'B25',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'One who worked in the service of the Gospel',
                'text' => 'Faithful God,
                we humbly ask your mercy for your servant N.,
                who worked so generously to spread the Good News: grant him/her the reward of his/her labors
                and bring him/her safely to your promised land.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 226,
                'sort_order' => 226,
                'alt_id' => 'B26',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'A baptized child',
                'text' => 'Lord,
                in our grief we call upon your mercy:
                open your ears to our prayers,
                and one day unite us again with N.,
                who, we firmly trust,
                already enjoys eternal life in your kingdom.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 227,
                'sort_order' => 227,
                'alt_id' => 'B27',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'A baptized child',
                'text' => 'To you, O Lord,
                we humbly entrust this child,
                so precious in your sight.
                Take him/her into your arms
                and welcome him/her into paradise,
                where there will be no sorrow, no weeping nor pain, but the fullness of peace and joy
                with your Son and the Holy Spirit
                for ever and ever.
                R. Amen.',
            ],
            [
                'id' => 228,
                'sort_order' => 228,
                'alt_id' => 'B28',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'A young person',
                'text' => 'Lord,
                your wisdom governs the length of our days.
                We mourn the loss of N.,
                whose life has passed so quickly,
                and we entrust him/her to your mercy.
                Welcome him/her into your heavenly dwelling
                and grant him/her the happiness of everlasting youth.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 229,
                'sort_order' => 229,
                'alt_id' => 'B29',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'A young person',
                'text' => 'Lord God,
                source and destiny of our lives,
                in your loving providence
                you gave us N.
                to grow in wisdom, age, and grace.
                Now you have called him/her to yourself.
                As we grieve the loss of one so young, we seek to understand your purpose.
                Draw him/her to yourself
                and give him/her full stature in Christ.
                May he/she stand with all the angels and saints, who know your love and praise your saving will.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 230,
                'sort_order' => 230,
                'alt_id' => 'B30',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'Parents',
                'text' => 'Lord God, who commanded us to honor father and mother, look kindly upon your servants N. and N.,
                have mercy upon them
                and let us see them again in eternal light.
                We ask this through Christ our Lord. R. Amen.',
            ],
            [
                'id' => 231,
                'sort_order' => 231,
                'alt_id' => 'B31',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'A parent',
                'text' => 'God of our ancestors in faith,
                by the covenant made on Mount Sinai
                you taught your people to strengthen the bonds of family through faith, honor, and love.
                Look kindly upon N.,
                a father/mother who sought to bind his/her children to you. Bring him/her one day to our heavenly home
                where the saints dwell in blessedness and peace.
                We ask this through Christ our Lord. R. Amen.',
            ],
            [
                'id' => 232,
                'sort_order' => 232,
                'alt_id' => 'B32',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'A married couple',
                'text' => 'Lord God,
                whose covenant is everlasting,
                have mercy upon the sins of your servants N. and N.; as their love for each other united them on earth,
                so let your love join them together in heaven.
                We ask this through Christ our Lord. R. Amen.',
            ],
            [
                'id' => 233,
                'sort_order' => 233,
                'alt_id' => 'B33',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'A married couple',
                'text' => 'Eternal Father,
                in the beginning you established the love of man and woman as a sign of creation.
                Your own Son loves the Church as a spouse.
                Grant mercy and peace to N. and N. who,
                by their love for each other,
                were signs of the creative love
                which binds the Church to Christ.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 234,
                'sort_order' => 234,
                'alt_id' => 'B34',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'A married couple',
                'text' => 'Lord God,
                giver of all that is true and lovely and gracious,
                you created in marriage a sign of your covenant.
                Look with mercy upon N. and N.
                You blessed them in their companionship,
                and in their joys and sorrows you bound them together. Lead them into eternal peace,
                and bring them to the table
                where the saints feast together in your heavenly home.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 235,
                'sort_order' => 235,
                'alt_id' => 'B35',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'A wife',
                'text' => 'Eternal God,
                you made the union of man and woman
                a sign of the bond between Christ and the Church.
                Grant mercy and peace to N.,
                who was united in love with her husband.
                May the care and devotion of her life on earth find a lasting reward in heaven.
                Look kindly on her husband and family/children as now they turn to your compassion and love. Strengthen their faith and lighten their loss.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 236,
                'sort_order' => 236,
                'alt_id' => 'B36',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'A husband',
                'text' => 'Eternal God,
                you made the union of man and woman
                a sign of the bond between Christ and the Church.
                Grant mercy and peace to N.,
                who was united in love with his wife.
                May the care and devotion of his life on earth find a lasting reward in heaven.
                Look kindly on his wife and family/children
                as now they turn to your compassion and love. Strengthen their faith and lighten their loss.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 237,
                'sort_order' => 237,
                'alt_id' => 'B37',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'A deceased non-Christian married to a Catholic',
                'text' => 'Almighty and faithful Creator,
                all things are of your making,
                all people are shaped in your image.
                We now entrust the soul of N. to your goodness. In your infinite wisdom and power,
                work in him/her your merciful purpose,
                known to you alone from the beginning of time. Console the hearts of those who love him/her
                in the hope that all who trust in you
                will find peace and rest in your kingdom.
                We ask this in the name of Jesus the Lord.
                R. Amen.',
            ],
            [
                'id' => 238,
                'sort_order' => 238,
                'alt_id' => 'B38',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'An elderly person',
                'text' => 'God of endless ages,
                from one generation to the next
                you have been our refuge and strength. Before the mountains were bom
                or the earth came to be,
                you are God.
                Have mercy now on your servant N. whose long life was spent in your service. Give him/her a place in your kingdom, where hope is firm for all who love
                and rest is sure for all who serve.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 239,
                'sort_order' => 239,
                'alt_id' => 'B39',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'An elderly person',
                'text' => 'God of mercy,
                look kindly on your servant N.
                who has set down the burden of his/her years.
                As he/she served you faithfully throughout his/her life, may you give him/her the fullness of your peace and joy. We give thanks for the long life of N.,
                now caught up in your eternal love.
                We make our prayer in the name of Jesus who is our risen Lord now and for ever.
                R. Amen.',
            ],
            [
                'id' => 240,
                'sort_order' => 240,
                'alt_id' => 'B40',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'One who died after a long illness',
                'text' => 'God of deliverance,
                you called our brother/sister N.
                to serve you in weakness and pain,
                and gave him/her the grace of sharing the cross of your Son. Reward his/her patience and forbearance,
                and grant him/her the fullness of Christs victory.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 241,
                'sort_order' => 241,
                'alt_id' => 'B41',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'One who died after a long illness',
                'text' => 'Most faithful God,
                lively is the courage of those who hope in you. Your servant N. suffered greatly
                but placed his/her trust in your mercy.
                Confident that the petition of those who mourn pierces the clouds and finds an answer,
                we beg you, give rest to N.
                Do not remember his/her sins
                but look upon his/her sufferings
                and grant him/her refreshment, light, and peace.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 242,
                'sort_order' => 242,
                'alt_id' => 'B42',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'One who died after a long illness',
                'text' => 'O God,
                you are water for our thirst and manna in our desert.
                We praise you for the life of N. and bless your mercy
                that has brought his/her suffering to an end. Now we beg that same endless mercy
                to raise him/her to new life.
                Nourished by the food and drink of heaven, may he/she rest for ever
                in the joy of Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 243,
                'sort_order' => 243,
                'alt_id' => 'B43',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'One who died suddenly',
                'text' => 'Lord,
                as we mourn the sudden death of our brother/sister, show us the immense power of your goodness
                and strengthen our belief
                that N. has entered into your presence.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 244,
                'sort_order' => 244,
                'alt_id' => 'B44',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'One who died accidentally or violently',
                'text' => 'Lord our God,
                you are always faithful and quick to show mercy. Our brother/sister N.
                was suddenly [and violently] taken from us. Come swiftly to his/her aid,
                have mercy on him/her,
                and comfort his/her family and friends
                by the power and protection of the cross.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 245,
                'sort_order' => 245,
                'alt_id' => 'B45',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'One who died by suicide',
                'text' => 'God, lover of souls,
                you hold dear what you have made and spare all things, for they are yours. Look gently on your servant N.,
                and by the blood of the cross
                forgive his/her sins and failings.
                Remember the faith of those who mourn and satisfy their longing for that day when all will be made new again
                in Christ, our risen Lord,
                who lives and reigns with you for ever and ever.
                R. Amen.',
            ],
            [
                'id' => 246,
                'sort_order' => 246,
                'alt_id' => 'B46',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'One who died by suicide',
                'text' => 'Almighty God and Father of all,
                you strengthen us by the mystery of the cross
                and with the sacrament of your Son’s resurrection. Have mercy on our brother/sister N.
                Forgive all his/her sins and grant him/her peace. May we who mourn this sudden death be comforted and consoled by your power and protection.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 247,
                'sort_order' => 247,
                'alt_id' => 'B47',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'Several persons',
                'text' => 'O Lord,
                you gave new life to N. and N.
                in the waters of baptism;
                show mercy to them now,
                and bring them to the happiness of life in your kingdom.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 248,
                'sort_order' => 248,
                'alt_id' => 'B48',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'collect',
                'for' => 'Several persons',
                'text' => 'All-powerful God,
                whose mercy is never withheld
                from those who call upon you in hope,
                look kindly on your servants N. and N.,
                who departed this life confessing your name,
                and number them among your saints for evermore.
                We ask this through Christ our Lord.
                R. Amen.',
            ],

            [
                'id' => 261,
                'sort_order' => 261,
                'alt_id' => 'J1',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'prayer_over_gifts',
                'for' => 'Outside the Easter Season',
                'text' => 'Lord,
                receive the gifts we offer
                for the salvation of N.
                May Christ be merciful in judging our brother (sister) N. for he (she) believed in Christ
                as his (her) Lord and Savior.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 262,
                'sort_order' => 262,
                'alt_id' => 'J2',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'prayer_over_gifts',
                'for' => '',
                'text' => 'Lord,
                accept this sacrifice we offer for our brother (sister) N. on the day of his (her) burial.
                May your love cleanse him (her)
                from his (her) human weakness
                and forgive any sins he (she) may have committed.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 263,
                'sort_order' => 263,
                'alt_id' => 'J3',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'prayer_over_gifts',
                'for' => 'During the Easter Season',
                'text' => 'Lord,
                we are united in this sacrament by the love of Jesus Christ. Accept these gifts
                and receive our brother (sister) N. into the glory of your Son,
                who is Lord for ever and ever.
                R. Amen.',
            ],
            [
                'id' => 264,
                'sort_order' => 264,
                'alt_id' => 'J4',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'prayer_over_gifts',
                'for' => 'Another Prayer',
                'text' => 'All-powerful Father,
                may this sacrifice wash away
                the sins of our brother (sister) N. in the blood of Christ. You cleansed him (her) in the waters of baptism.
                In your loving mercy grant him (her) pardon and peace.
                We ask this through Christ our Lord.
                R. Amen.',
            ],

            [
                'id' => 271,
                'sort_order' => 271,
                'alt_id' => 'K1',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'preface',
                'for' => '',
                'text' => 'Father, all-powerful and ever-living God,
                we do well always and everywhere to give you thanks through Jesus Christ our Lord.
                In him, who rose from the dead, our hope of resurrection dawned. The sadness of death gives way to the bright promise of immortality.
                Lord, for your faithful people life is changed, not ended. When the body of our earthly dwelling lies in death
                we gain an everlasting dwelling place in heaven.
                And so, with all the choirs of angels in heaven we proclaim your glory
                and join in their unending hymn of praise:
                Holy, holy, holy...',
            ],
            [
                'id' => 272,
                'sort_order' => 272,
                'alt_id' => 'K2',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'preface',
                'for' => '',
                'text' => 'Father, all-powerful and ever-living God,
                we do well always and everywhere to give you thanks through Jesus Christ our Lord.
                He chose to die
                that he might free all men from dying. He gave his life
                that we might live to you alone for ever.
                In our joy we sing to your glory with all the choirs of angels:
                Holy, holy, holy...',
            ],
            [
                'id' => 273,
                'sort_order' => 273,
                'alt_id' => 'K3',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'preface',
                'for' => '',
                'text' => 'Father, all-powerful and ever-living God,
                we do well always and everywhere to give you thanks through Jesus Christ our Lord.
                In him the world is saved, man is reborn,
                and the dead rise again to life.
                Through Christ the angels of heaven offer their prayer of adoration
                as they rejoice in your presence for ever. May our voices be one with theirs
                in their triumphant hymn of praise:
                Holy, holy, holy...',
            ],
            [
                'id' => 274,
                'sort_order' => 274,
                'alt_id' => 'K4',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'preface',
                'for' => '',
                'text' => 'Father, all-powerful and ever-living God,
                we do well always and everywhere to give you thanks.
                By your power you bring us to birth.
                By your providence you rule our lives.
                By your command you free us at last from sin as we return to the dust from which we came. Through the saving death of your Son
                we rise at your word to the glory of resurrection.
                Now we join the angels and the saints
                as they sing their unending hymn of praise:
                Holy, holy, holy...',
            ],
            [
                'id' => 275,
                'sort_order' => 275,
                'alt_id' => 'K5',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'preface',
                'for' => '',
                'text' => 'Father, all-powerful and ever-living God,
                we do well always and everywhere to give you thanks through Jesus Christ our Lord.
                Death is the just reward for our sins, yet, when at last we die,
                your loving kindness calls us back to life in company with Christ,
                whose victory is our redemption.
                Our hearts are joyful,
                for we have seen your salvation, and now with the angels and saints we praise you for ever:
                Holy, holy, holy...',
            ],

            [
                'id' => 291,
                'sort_order' => 291,
                'alt_id' => 'N1',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'after_communion',
                'for' => '',
                'text' => 'Lord God,
                your Son Jesus Christ gave us
                the sacrament of his body and blood
                to guide us on our pilgrim way to your kingdom.
                May our brother (sister) N., who shared in the eucharist, come to the banquet of life Christ has prepared for us.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 292,
                'sort_order' => 292,
                'alt_id' => 'N2',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'after_communion',
                'for' => '',
                'text' => 'Father, all-powerful God,
                we pray for our brother (sister) N.
                whom you have called (today) from this world.
                May this eucharist cleanse him (her),
                forgive his (her) sins,
                and raise him (her) up to eternal joy in your presence.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 293,
                'sort_order' => 293,
                'alt_id' => 'N3',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'after_communion',
                'for' => 'During the Easter Season',
                'text' => 'Lord God,
                may the death and resurrection of Christ
                which we celebrate in this eucharist
                bring our brother (sister) N. the peace of your eternal home.
                We ask this in the name of Jesus the Lord.
                R. Amen.',
            ],
            [
                'id' => 294,
                'sort_order' => 294,
                'alt_id' => 'N4',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'after_communion',
                'for' => 'Another Prayer',
                'text' => 'Lord,
                in this sacrament you give us your crucified and risen Son. Bring to the glory of the resurrection our brother (sister) N. who has been purified by this holy mystery.
                Grant this through Christ our Lord.
                R. Amen.',
            ],


            [
                'id' => 301,
                'sort_order' => 301,
                'alt_id' => 'O1',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'final_commendation',
                'for' => '',
                'text' => 'Before we go our separate ways, let us take leave of our brother/sister. May our farewell express our affection for him/her; may it ease our sadness and strengthen our hope. One day we shall joyfully greet him/her again when the love of Christ, which conquers all things, destroys even death itself.',
            ],
            [
                'id' => 302,
                'sort_order' => 302,
                'alt_id' => 'O2',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'final_commendation',
                'for' => '',
                'text' => 'Trusting in God, we have prayed together for N. and now we come to the last farewell. There is sadness in parting, but we take comfort in the hope that one day we shall see N. again and enjoy his/her friendship. Although this congregation will disperse in sorrow, the mercy of God will gather us together again in the joy of his kingdom. Therefore let us console one another in the faith of Jesus Christ.',
            ],
            [
                'id' => 303,
                'sort_order' => 303,
                'alt_id' => 'O3',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'final_commendation',
                'for' => '',
                'text' => 'With faith in Jesus Christ, we must reverently bury the body of our brother/sister.
                Let us pray with confidence to God, in whose sight all creation lives, that he will raise up in holiness and power the mortal body of our brother/sister and command his/her soul to be numbered among the blessed.
                May God grant him/her a merciful judgment, deliverance from death, and pardon of sin. May Christ the Good Shepherd carry him/her home to be at peace with the Father. May he/she rejoice for ever in the presence of the eternal King and in the company of all the saints.',
            ],
            [
                'id' => 304,
                'sort_order' => 304,
                'alt_id' => 'O4',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'final_commendation',
                'for' => '',
                'text' => 'Our brother/sister N. has fallen asleep in Christ. Confident in our hope of eternal life, let us commend him/her to the loving mercy of our Father and let our prayers go with him/her. He/she was adopted as God’s son/daughter in baptism and was nourished at the table of the Lord; may he/she now inherit the promise of eternal life and take his/her place at the table of God’s children in heaven.
                Let us pray also on our own behalf, that we who now mourn and are saddened may one day go forth with our brother/sister to meet the Lord of life when he appears in glory.',
            ],
            [
                'id' => 305,
                'sort_order' => 305,
                'alt_id' => 'O5',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'final_commendation',
                'for' => '',
                'text' => 'Because God has chosen to call our brother/sister N. from this life to himself,
                we commit his/her body to the earth,
                for we are dust and unto dust we shall return.
                But the Lord Jesus Christ will change our mortal bodies to be like his in glory,
                for he is risen, the firstborn from the dead.
                So let us commend our brother/sister to the Lord, that the Lord may embrace him/her in peace
                and raise up his/her body on the last day.',
            ],
            [
                'id' => 306,
                'sort_order' => 306,
                'alt_id' => 'O6',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'final_commendation',
                'for' => '',
                'text' => 'Before we go our separate ways, let us take leave of our brother/sister. May our farewell express our affection for him/her; may it ease our sadness and strengthen our hope. One day we shall joyfully greet him/her again when the love of Christ, which con- quers all things, destroys even death itself.',
            ],
            [
                'id' => 307,
                'sort_order' => 307,
                'alt_id' => 'O7',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'final_commendation',
                'for' => '',
                'text' => 'Trusting in God, we have prayed together for N. and now we come to the last farewell. There is sadness in parting, but we take comfort in the hope that one day we shall see N. again and enjoy his/her friendship. Although this congregation will disperse in sorrow, the mercy of God will gather us together again in the joy of the kingdom. Therefore let us console one another in the faith of Jesus Christ.',
            ],


            [
                'id' => 321,
                'sort_order' => 321,
                'alt_id' => 'Q1',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'final_commendation',
                'for' => '',
                'text' => 'Into your hands, Father of mercies,
                we commend our brother/sister N.
                in the sure and certain hope
                that, together with all who have died in Christ, he/she will rise with him on the last day.
                [We give you thanks for the blessings
                which you bestowed upon N. in this life:
                they are signs to us of your goodness
                and of our fellowship with the saints in Christ.]
                Merciful Lord,
                turn toward us and listen to our prayers:
                open the gates of paradise to your servant
                and help us who remain
                to comfort one another with assurances of faith,
                until we all meet in Christ
                and are with you and with our brother/sister for ever.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 322,
                'sort_order' => 322,
                'alt_id' => 'Q2',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'final_commendation',
                'for' => '',
                'text' => 'To you, O Lord, we commend the soul of N. your servant; in the sight of this world he/she is now dead;
                in your sight may he/she live for ever.
                Forgive whatever sins he/she committed through human weakness
                and in your goodness grant him/her everlasting peace.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 323,
                'sort_order' => 323,
                'alt_id' => 'Q3',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'final_commendation',
                'for' => 'A baptized person',
                'text' => 'Into your hands, Father of mercies,
                we commend our brother/sister N.
                in the sure and certain hope
                that, together with all who have died in Christ, he/she will rise with him on the last day.
                [We give you thanks for the blessings
                which you bestowed upon N. in this life:
                they are signs to us of your goodness
                and of our fellowship with the saints in Christ.]
                Merciful Lord,
                turn toward us and listen to our prayers:
                open the gates of paradise to your servant
                and help us who remain
                to comfort one another with assurances of faith,
                until we all meet in Christ
                and are with you and with our brother/sister for ever.
                We ask this through Christ our Lord.
                R. Amen.',
            ],
            [
                'id' => 324,
                'sort_order' => 324,
                'alt_id' => 'Q4',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'final_commendation',
                'for' => 'A baptized child',
                'text' => 'Lord Jesus,
                like a shepherd who gathers the lambs to protect them from all harm,
                you led N. to the waters of baptism and shielded him/her in innocence.
                Now carry this little one
                on the path to your kingdom of light where he/she will find happiness and every tear will be wiped away.
                To you be glory, now and for ever.
                R. Amen.',
            ],
            [
                'id' => 325,
                'sort_order' => 325,
                'alt_id' => 'Q5',
                'translation_id' => 1,
                'liturgy_type' => 'funeral',
                'type' => 'final_commendation',
                'for' => 'A baptized child',
                'text' => 'Into your gentle keeping, O Lord, we commend this child N.. Though our hearts are troubled, we hope in your loving kindness.
                By the sign of the cross
                he/she was claimed for Christ,
                and in the waters of baptism
                he/she died with Christ to live in him for ever.
                May the angels, our guardians,
                lead N. now to paradise
                where your saints will welcome him/her
                and every tear will be wiped away.
                There we shall join in songs of praise for ever.
                We ask this through Christ our Lord.
                R. Amen.',
            ],


        ]);
    }
}
