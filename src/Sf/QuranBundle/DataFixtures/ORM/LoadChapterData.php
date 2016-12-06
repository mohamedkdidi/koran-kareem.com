<?php

namespace Sf\QuranBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Sf\QuranBundle\Entity\Chapter;

class LoadChapterData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $arrayChapterName = array('سورة الفاتحة', 'سورة البقرة', 'سورة آل عمران', 'سورة النساء', 'سورة المائدة', 'سورة الأنعام', 'سورة الأعراف', 'سورة الأنفال', 'سورة التوبة', 'سورة يونس', 'سورة هود', 'سورة يوسف', 'سورة الرعد', 'سورة إبراهيم', 'سورة الحجر', 'سورة النحل', 'سورة الإسراء', 'سورة الكهف', 'سورة مريم', 'سورة طه', 'سورة الأنبياء', 'سورة الحج', 'سورة المؤمنون', 'سورة النّور', 'سورة الفرقان', 'سورة الشعراء', 'سورة النّمل', 'سورة القصص', 'سورة العنكبوت', 'سورة الرّوم', 'سورة لقمان', 'سورة السجدة', 'سورة الأحزاب', 'سورة سبأ', 'سورة فاطر', 'سورة يس', 'سورة الصافات', 'سورة ص', 'سورة الزمر', 'سورة غافر', 'سورة فصّلت', 'سورة الشورى', 'سورة الزخرف', 'سورة الدّخان', 'سورة الجاثية', 'سورة الأحقاف', 'سورة محمد', 'سورة الفتح', 'سورة الحجرات', 'سورة ق', 'سورة الذاريات', 'سورة الطور', 'سورة النجم', 'سورة القمر', 'سورة الرحمن', 'سورة الواقعة', 'سورة الحديد', 'سورة المجادلة', 'سورة الحشر', 'سورة الممتحنة', 'سورة الصف', 'سورة الجمعة', 'سورة المنافقون', 'سورة التغابن', 'سورة الطلاق', 'سورة التحريم', 'سورة الملك', 'سورة القلم', 'سورة الحاقة', 'سورة المعارج', 'سورة نوح', 'سورة الجن', 'سورة المزّمّل', 'سورة المدّثر', 'سورة القيامة', 'سورة الإنسان', 'سورة المرسلات', 'سورة النبأ', 'سورة النازعات', 'سورة عبس', 'سورة التكوير', 'سورة الإنفطار', 'سورة المطفّفين', 'سورة الإنشقاق', 'سورة البروج', 'سورة الطارق', 'سورة الأعلى', 'سورة الغاشية', 'سورة الفجر', 'سورة البلد', 'سورة الشمس', 'سورة الليل', 'سورة الضحى', 'سورة الشرح', 'سورة التين', 'سورة العلق', 'سورة القدر', 'سورة البينة', 'سورة الزلزلة', 'سورة العاديات', 'سورة القارعة', 'سورة التكاثر', 'سورة العصر', 'سورة الهمزة', 'سورة الفيل', 'سورة قريش', 'سورة الماعون', 'سورة الكوثر', 'سورة الكافرون', 'سورة النصر', 'سورة المسد', 'سورة الإخلاص', 'سورة الفلق', 'سورة النّاس');
        $order = 1;
        foreach ($arrayChapterName as $ChapterName) {
            $chapterQuran = new Chapter();
            $chapterQuran->setName($ChapterName);
            $chapterQuran->setOrdering(sprintf("%03d",$order));
            $manager->persist($chapterQuran);
            $order++;
        }

        $manager->flush();
    }
}