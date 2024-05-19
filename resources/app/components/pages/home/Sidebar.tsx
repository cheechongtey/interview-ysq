import { TabsList, TabsTrigger } from '@/components/ui/tabs';
import { HomeContext } from '@/provider/HomeProvider';
import { useContext } from 'react';

const Sidebar = () => {
  const { cigratteTypes, onChangeType } = useContext(HomeContext);
  return (
    <div>
      <p className="text-justify mb-8">
        From invigorating blueberries to indulgent coffee cookies or comforting vanilla latte, every
        SAAT flavour in our repertoire has been crafted for maximum enjoyment and pure satisfaction.
        Created and blended with every palate in mind, SAAT Kretek boasts a unique menu with one of
        a kind flavours which promise the ultimate moment, just for you.
      </p>
      <div className="w-full overflow-y-scroll md:overflow-visible">
        <TabsList asChild>
          <div className="flex md:flex-col items-center gap-4 bg-transparent w">
            <TabsTrigger value={'all'} className="w-full" onClick={() => onChangeType('all')}>
              All
            </TabsTrigger>
            {cigratteTypes.map((opt) => (
              <TabsTrigger
                key={opt.id}
                value={opt.id}
                className="w-full"
                onClick={() => onChangeType(opt.id)}
              >
                {opt.name}
              </TabsTrigger>
            ))}
          </div>
        </TabsList>
      </div>
    </div>
  );
};

export default Sidebar;
