import { TabsContent } from '@/components/ui/tabs';
import Legal from './Legal';

const Content = () => {
  return (
    <div className="basis-1 md:basis-3/4 p-4 bg-intro-and-email rounded-md">
      <TabsContent value="contact" className="mt-0">
        <small className="uppercase text-slate-400 text-xs">Email us</small>
        <p className="text-sm text-white mt-2">hello.id@paristobacco.com</p>
        <p className="text-sm text-white mt-4">We'll reply within one business day</p>
      </TabsContent>
      <TabsContent value="legal">
        <Legal />
      </TabsContent>
    </div>
  );
};

export default Content;
